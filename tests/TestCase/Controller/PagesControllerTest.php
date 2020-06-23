<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         1.2.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Test\TestCase\Controller;

use App\Controller\PagesController;
use Cake\Core\App;
use Cake\Core\Configure;
use Cake\Http\Response;
use Cake\Http\ServerRequest;
use Cake\TestSuite\IntegrationTestCase;
use Cake\View\Exception\MissingTemplateException;

/**
 * PagesControllerTest class
 */
class PagesControllerTest extends IntegrationTestCase
{
    /**
     * testMultipleGet method
     *
     * @return void
     */
    public function testMultipleGet()
    {
        $this->get('/');
        $this->assertResponseOk();
        $this->get('/');
        $this->assertResponseOk();
    }

    /**
     * testDisplay method
     *
     * @return void
     */
    public function testDisplay()
    {
        $this->get('/');
       
        $this->assertResponseOk();
        $this->assertResponseContains('Feel Good,');
        $this->assertResponseContains('We\'re Social, Join Us');
        $this->assertResponseContains('<html>');
    }

    /**
     * testFaq method
     *
     * @return void
     */
    public function testFaqs()
    {
        $this->get('/faqs');
       
        $this->assertResponseOk();
        $this->assertResponseContains('FREQUENTLY ASKED QUESTIONS');
        $this->assertResponseContains('How often should I change my pad?');
        $this->assertResponseContains('How much is a pack of Diva pad?');
        $this->assertResponseContains('<html>');
    }
    /**
     * testDistrubutor method
     *
     * @return void
     */
    public function testDistributor()
    {
        $this->get('/apply-as-distributor');
       
        $this->assertResponseOk();
        $this->assertResponseContains('Join the Padwagon');
        $this->assertHtml(['input' => ['name', 'id' => 'first_name']], '<input name="first_name" id="first_name"></input>');
        $this->assertHtml(['select' => ['name', 'id' => 'seller_type']], '<select name="seller_type" id="seller_type"></select>');
        $this->assertResponseContains('<html>');
    }
    /**
     * testContact method
     *
     * @return void
     */
    public function testContact()
    {
        $this->get('/contact-us');
       
        $this->assertResponseOk();
        $this->assertResponseContains('Get in touch with us');
        $this->assertHtml(['p' => true],
        '<p>Fill in your details below and a member of our team will get back to you as soon as possible.</p>',
        '/p');

        $this->assertResponseContains('<html>');
        //Test that email  is sent whe post request occurs
        $this->enableCsrfToken();
        $data = [
            'first_name'=>'Name',
            'last_name'=>'Name',
            'email'=>'Email@email.com',
            'state'=>'Abia',
            'city'=>'aba',
            'subject'=>'Product Feedback',
            'information'=>'test email',
        ];
        
        $this->post('contact-us',$data );
        $this->viewVariable('state');
        $this->viewVariable('page');
        $this->viewVariable('contact');
        // $this->assertFlashMessage('Email Sent');
        $this->assertResponseSuccess();
    }
    /**
     * testAbout method
     *
     * @return void
     */
    public function testAbout()
    {
        $this->get('/about-us');
       
        $this->assertResponseOk();
        $this->assertResponseContains('WHAT DRIVES US');
        $this->assertHtml(['h6' => true], '<h6>Caring and uplifting women all over the world</h6>');
        $this->assertHtml(['h6' => true], '<h6>Our Core Values</h6>');
        $this->assertResponseContains('<html>');
    }
    /**
     * Test that missing template renders 404 page in production
     *
     * @return void
     */
    public function testMissingTemplate()
    {
        Configure::write('debug', false);
        $this->get('/pages/not_existing');

        $this->assertResponseFailure();
        $this->assertResponseContains('Error');
    }

    /**
     * Test that missing template in debug mode renders missing_template error page
     *
     * @return void
     */
    public function testMissingTemplateInDebug()
    {
        Configure::write('debug', true);
        $this->get('/pages/not_existing');

        $this->assertResponseFailure();
        $this->assertResponseContains('Missing Template');
        $this->assertResponseContains('Stacktrace');
        $this->assertResponseContains('not_existing.ctp');
    }

    // /**
    //  * Test directory traversal protection
    //  *
    //  * @return void
    //  */
    // public function testDirectoryTraversalProtection()
    // {
    //     $this->get('/pages/../Layout/ajax');
    //     $this->assertResponseCode(403);
    //     $this->assertResponseContains('Forbidden');
    // }
}
