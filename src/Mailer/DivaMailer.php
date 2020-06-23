<?php

namespace App\Mailer;

use Cake\Mailer\Mailer;
use Cake\Event\Event;
use Cake\Datasource\EntityInterface;
use Cake\Log\Log;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;

/**
 * WasteMarketMailer mailer.
 */
class DivaMailer extends Mailer
{

    static public $name = 'Diva';

    public function contact($data)
    {

        $this->setTo(APP_EMAIL)
            ->setSubject($data['subject'] . ' - Divapad Contact-us Page')
            ->set(array(
                'fullname' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email'],
                'city' => $data['city'],
                'state' => $data['state'],
                'email' => $data['email'],
                'message' => $data['information']
            ));


        $this->setEmailFormat('html');
    }
    /**
     * Send new distributor email to divapad contact email
     * @param array $data arry of didtributor information
     * 
     */
    public function distributor($data)
    {

        $this->setTo(APP_EMAIL)
            ->setSubject('Divapad Distributor Request')
            ->set(array(
                'fullname' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                
            ));


        $this->setEmailFormat('html');
    }
    /**
     *Forgot Password emailer
     *@param array $user the details of the user who forgot his password
     */
    public function blogForgot($user)
    {
        $this->to($user['email'], $user['first_name'] . ' ' . $user['last_name'])
            ->subject("Divapad Password Reset")
            ->viewVars(['username' => $user['username'], 'confirmation_link' => '<a href="' . BASE_DOMAIN . 'blog/users/reset/' . base64_encode($user['id']) . '">Click link to Reset email</a>'])
            ->layout('forgot')
            ->emailFormat('both');
    }
}
