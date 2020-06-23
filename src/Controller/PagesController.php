<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Mailer\MailerAwareTrait;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    use MailerAwareTrait;
    private $_igData;
    /**
     * This route exposes the Frequently asked question route
     */
    public function faqs()
    {
        $this->set('page', 'faqs');
    }
    /**
     * This route exposes the main page
     */
    public function home()
    {
        //Check if user has a saved token
        // $savedToken = $this->Instagram->fetchSavedToken();
        // if (!$savedToken) {
        //     //if not then get tokens from IG
        //     $this->redirect($this->Instagram->authorizationUrl);
        // } else {
        //     //else use the token to fetch data

        //     if ($this->Instagram->hasUserAccessToken) {
        //         //this refreshes the usertoken if it needs to
        //         $this->Instagram->getLongLivedUserRefreshToken();
        //         $this->set('igMedia', []);
        //     }
        // }

        
        $this->set('page', 'home');
    }
    public function loadIgPost()
    {
        $this->autoRender = false;
        $this->viewBuilder()->setLayout(false);
        $savedToken = $this->Instagram->fetchSavedToken();
        if (count($savedToken) > 0) {
            if ($this->Instagram->hasUserAccessToken) {
                if (isset($_GET['goto'])) {
                    echo json_encode($this->Instagram->getMediaPaging($_GET['goto']));
                } else {
                    
                    echo json_encode($this->Instagram->getUserMedia());
                }
            } else {
                echo json_encode(['message' => 'no token']);
            }
        }

        exit();
    }
    /**
     * This route exposes the Terms  route
     */
    public function terms()
    {
        $this->set('page', 'terms');
    }
    /**
     * This route exposes the Rewards Product route
     */
    public function rewardProduct()
    {
       

        $this->set('page', 'reward');
    }
    /**
     * This route exposes the Target Product route
     */
    public function targetProduct()
    {

        $this->set('page', 'target');
    }
    /**
     * This route exposes the Fixed Product route
     */
    public function fixedProduct()
    {
        $this->set('page', 'fixed');
    }
    /**
     * This route exposes the Reviews route
     */
    public function review()
    {
        $this->set('page', 'reviews');
    }
    public function notExisting()
    {

    }
}
