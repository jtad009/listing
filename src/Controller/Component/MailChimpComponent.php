<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Utility\Text;

/**
 * MailChimp component
 */
class MailChimpComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    private $_url = 'https://:datacenter.api.mailchimp.com/3.0/lists/' . AUDIENCE_ID . '/members';

    /**
     * Add new contact to mailchimp maillist
     * @param string $email the email ti add
     * @return array|null
     */
    public function addContact($email)
    {
        $dataCenter = substr(MAILCHIMP_API_KEY, strpos(MAILCHIMP_API_KEY, '-') + 1);
        $url = Text::insert($this->_url, ['datacenter' => $dataCenter]);

        $options = [
            'endpoint_url' => $url,
            'type' => 'POST',
            'api_key' => MAILCHIMP_API_KEY,
            'url_params' => [
                'email_address' => $email,
                'status' => 'subscribed',
            ],

        ];

        return $this->sendToMailChimpApi($options);
    }

    /**
     * Update a mailchimp contact
     * @param string $id mail_chimp_id
     * @param string $email the email to update
     * @return array|null
     */
    public function updateContact($id, $email)
    {
        $dataCenter = substr(MAILCHIMP_API_KEY, strpos(MAILCHIMP_API_KEY, '-') + 1);
        $url = Text::insert($this->_url, ['datacenter' => $dataCenter]);

        $options = [
            'endpoint_url' => $url . '/' . $id,
            'type' => 'PUT',
            'api_key' => MAILCHIMP_API_KEY,
            'url_params' => [
                'email_address' => $email,
                'status' => 'subscribed',
            ],

        ];

        return $this->sendToMailChimpApi($options);
    }

    /**
     * Curl connection to mailChimp
     * @param array $params array to send to API
     * @return array| null
     */
    private function sendToMailChimpApi($params)
    {
        $ch = curl_init();
        $endPoint = $params['endpoint_url'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $params['api_key']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params['url_params']));
        if ('POST' === $params['type']) {
            curl_setopt($ch, CURLOPT_POST, 1);
        } elseif ('PUT' === $params['type']) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
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
}
