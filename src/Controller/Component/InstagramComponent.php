<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Filesystem\Folder;
use Cake\I18n\Date;

/**
 * Instagram component
 */
class InstagramComponent extends Component
{
    private $_getCode = '';
    public $authorizationUrl = '';
    private $_userAccessToken = 'IGQVJYcEVSbm1pdXA0R1oxS205UTRoSXdBUzY1aGFTSXpvM2lBZAS0zNWxXUTZAIWmRQUHA1Q0VzalN5WG51MXEwbDEyME44X05GQVRNWl9vRWpfTHZA6ZAUNBYnMtbWZA2LUFqX0lBVHFtMmlBLV9wYkNVMExnc3F0UEg4emg4';
    private $_apiBaseUrl = 'https://api.instagram.com/';
    private $_graphBaseUrl = 'https://graph.instagram.com/';
    public $hasUserAccessToken = false;
    private $_userAccessTokenExpires = 0;
    private $_userId;
    private $_lastModified = null;
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * Constuctor method for this class
     * @param array $params default config passed to this class
     * @return void
     */
    public function initialize(array $params)
    {
        $this->_defaultConfig = $params;

        //Save instagram code
        $this->_getCode = $this->_defaultConfig['get_code'];
        //get access token
        $this->_setUserInstagramAccessToken();
        //Get auth URL
        $this->setAuthorizationUrl();
    }

    /**
     * Build Authorization URl
     * @return void
     */
    public function setAuthorizationUrl()
    {
        $getVars = [
            'client_id' => INSTAGRAM_CLIENT_ID,
            'redirect_uri' => BASE_DOMAIN,
            'scope' => 'user_profile,user_media',
            'response_type' => 'code',
        ];
        $this->authorizationUrl = $this->_apiBaseUrl . 'oauth/authorize?' . http_build_query($getVars);
    }

    /**
     * Persist user token to db
     * @return void
     */
    private function _setUserInstagramAccessToken()
    {
        if ($this->_defaultConfig['get_code']) {
            $userAccessTokenResponse = $this->_getUserAccessToken();
            $this->_userAccessToken = $userAccessTokenResponse['access_token'];
            $this->hasUserAccessToken = true;
            $this->_userId = $userAccessTokenResponse['user_id'];
            //Get long lived access tokens
            $longLivedAccessTokenResponse = $this->_getLongLivedUserAccessToken();
            $this->_userAccessToken = $longLivedAccessTokenResponse['access_token'];
            $this->_userAccessTokenExpires = $longLivedAccessTokenResponse['expires_in'];

            $this->saveToken([
                'user_id' => $userAccessTokenResponse['user_id'],
                'short_token' => $userAccessTokenResponse['access_token'],
                'long_token' => $longLivedAccessTokenResponse['access_token'],
                'expires_in' => $longLivedAccessTokenResponse['expires_in'],
            ]);
        }
    }

    /**
     * Get the user profile information, incase you need to save it
     * @return array
     */
    public function getUser()
    {
        $params = [
            'endpoint_url' => $this->_graphBaseUrl . 'me',
            'type' => 'GET',
            'url_params' => [
                'fields' => 'id, username, media_count, email',

            ],
        ];
        $response = $this->_makeApiCall($params);

        return $response;
    }

    /**
     * Get the user Media information
     * @return array|null
     */
    public function getUserMedia()
    {
        $params = [
            'endpoint_url' => $this->_graphBaseUrl . $this->_userId . '/media',
            'type' => 'GET',
            'url_params' => [
                'fields' => 'id, caption, media_type, media_url',

            ],
        ];
        $response = $this->_makeApiCall($params);

        return $response;
    }

    /**
     * Pagination for user profile
     * @param string $pagingEndpoint id for next page
     * @return array|null
     */
    public function getMediaPaging($pagingEndpoint)
    {
        $params = [
            'endpoint_url' => $pagingEndpoint,
            'type' => 'GET',
            'url_params' => [
                'paging' => true,
            ],
        ];
        $response = $this->_makeApiCall($params);

        return $response;
    }

    /**
     * Get instagrams Long lived access token that expires in 60 days
     * @return array|null
     */
    private function _getLongLivedUserAccessToken()
    {
        $params = [
            'endpoint_url' => $this->_graphBaseUrl . 'access_token',
            'type' => 'GET',
            'url_params' => [
                'client_secret' => INSTAGRAM_CLIENT_SECRET,
                'grant_type' => 'ig_exchange_token',

            ],
        ];
        $response = $this->_makeApiCall($params);

        return $response;
    }

    /**
     * Refresh instagrams Long lived access token only when it's been 31days  old
     * SINCE TOKENS die after 60 days.
     * @return void
     */
    public function getLongLivedUserRefreshToken()
    {
        if (ceil((time() - strtotime($this->_lastModified)) / 86400) > 31) {
            $params = [
                'endpoint_url' => $this->_graphBaseUrl . 'refresh_access_token',
                'type' => 'GET',
                'url_params' => [
                    'client_secret' => INSTAGRAM_CLIENT_SECRET,
                    'grant_type' => 'ig_refresh_token',
                    'access_token' => $this->getUserAccessToken(),
                ],
            ];
            $response = $this->_makeApiCall($params);
            $this->saveToken([
                'long_token' => $response['access_token'],
                'expires_in' => $response['expires_in'],
            ]);
        }
    }

    /**
     * Make params that will be sent to the api endpoint for token collection
     * @return array
     */
    private function _getUserAccessToken()
    {
        $params = [
            'endpoint_url' => $this->_apiBaseUrl . 'oauth/access_token',
            'type' => 'POST',
            'url_params' => [
                'client_id' => INSTAGRAM_CLIENT_ID,
                'app_secret' => INSTAGRAM_CLIENT_SECRET,
                'grant_type' => 'authorization_code',
                'redirect_uri' => BASE_DOMAIN,
                'code' => $this->_getCode,
            ],
        ];
        $response = $this->_makeApiCall($params);

        return $response;
    }

    /**
     * Make call to endpoint using curl
     * @param array $params an array of configs to pass to endpoint
     * @return array|null
     */
    private function _makeApiCall($params)
    {
        $ch = curl_init();
        $endPoint = $params['endpoint_url'];

        if ('POST' === $params['type']) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params['url_params']));
            curl_setopt($ch, CURLOPT_POST, 1);
        } elseif ('GET' === $params['type'] && !isset($params['url_params']['paging'])) {
            $params['url_params']['access_token'] = $this->_userAccessToken;

            //add params to endpoint
            $endPoint .= '?' . http_build_query($params['url_params']);
        }

        curl_setopt($ch, CURLOPT_URL, $endPoint);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        $responseArray = json_decode($response, true);
        //Check to see if errors occured then dump errors
        if (isset($responseArray['error_type'])) {
            die();
        } else {
            return $responseArray;
        }
    }

    /**
     * Returns user access token
     * @return string user accesstoken
     */
    public function getUserAccessToken()
    {
        return $this->_userAccessToken;
    }

    /**
     * Returns user access token expiry date
     * @return string user expires in seconds
     */
    public function getUserAccessTokenExpires()
    {
        return ceil($this->_userAccessTokenExpires / 86400);
    }

    /**
     * Persist the token sent
     * @param array $fields an array of fields
     * @return void
     */
    private function saveToken($fields = [])
    {
        //Search for record first
        $existingTokens = $this->fetchSavedToken();
        if (!$existingTokens) {
            ConnectionManager::get('blog')->execute(
                "INSERT INTO oauths (id, userId, short_token, long_token, refresh_token, expires_in, created, modified) VALUES (?,?,?,?,?,?, NOW(), NOW())",
                [
                    \Cake\Utility\Text::uuid(),
                    $fields['user_id'],
                    $fields['short_token'],
                    $fields['long_token'],
                    $fields['expires_in'],
                ]
            );
        } else {
            if (count($fields) > 0) {
                ConnectionManager::get('blog')->execute(
                    "UPDATE  oauths SET long_token = ?, expires_in = ? , modified=NOW() WHERE id = ? ",
                    [
                        $fields['long_token'],
                        $fields['expires_in'],
                        $existingTokens['id'],
                    ]
                );
            }
        }
    }

    /**
     * Fetch token saved in DB
     * @return array|false
     */
    public function fetchSavedToken()
    {
        $savedAccessToken = ConnectionManager::get('blog')->execute('SELECT * FROM oauths')->fetch('assoc');
        if ($savedAccessToken) { //if it is not false
            $this->hasUserAccessToken = true;
            $this->_userAccessToken = $savedAccessToken['long_token'];
            $this->_userId = $savedAccessToken['userId'];
            $this->_lastModified = $savedAccessToken['modified'];

            return $savedAccessToken;
        }

        return false;
    }
}
