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
     * @return void
     */
    public function faqs()
    {
        $this->set('page', 'faqs');
    }

    /**
     * This route exposes the main page
     * @return void
     */
    public function home()
    {
        $this->set('page', 'home');
    }

    /**
     * Load IG Feeds for a Business
     * @return void
     */
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
     * @return void
     */
    public function terms()
    {
        $this->set('page', 'terms');
    }

    /**
     * This route exposes the Rewards Product route
     * @return void
     */
    public function rewardProduct()
    {
        $this->set('page', 'reward');
    }

    /**
     * This route exposes the Target Product route
     * @return void
     */
    public function targetProduct()
    {
        $this->set('page', 'target');
    }

    /**
     * This route exposes the Fixed Product route
     * @return void
     */
    public function fixedProduct()
    {
        $this->set('page', 'fixed');
    }

    /**
     * This route exposes the Reviews route
     * @return void
     */
    public function review()
    {
        $this->set('page', 'reviews');
    }

    /**
     * Not existing method for making test pass if page isn't found
     * @return void
     */
    public function notExisting()
    {
    }
}
