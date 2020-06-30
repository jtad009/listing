<?php

namespace App\Mailer;

use Cake\Datasource\ConnectionManager;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\Log\Log;
use Cake\Mailer\Mailer;
use Cake\Network\Exception\NotFoundException;

/**
 * WasteMarketMailer mailer.
 */
class DivaMailer extends Mailer
{

    public static $name = 'Diva';

    /**
     * Send email to contact
     * @return null
     */
    public function contact()
    {
        return null;
    }

    /**
     * Send new distributor email to divapad contact email
     * @param array $data arry of didtributor information
     * @return null
     */
    public function distributor($data)
    {
        return null;
    }

    /**
     * Forgot Password emailer
     * @param array $user the details of the user who forgot his password
     * @return void
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
