<?php

namespace Directory\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{
    public function isAuthorized($user, $previleadge)
    {
        return in_array($previleadge, $user['rights']);
    }
}
