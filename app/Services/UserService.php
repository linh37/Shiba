<?php

namespace App\Services;

use Carbon\Carbon;
use App\Http\Controllers\BaseController;

class UserService extends BaseController
{
    public function getUserByEmail($email)
    {
        $user = $this->database->getReference('users')
            ->orderByChild('email')
            ->equalTo($email)
            ->getSnapshot()
            ->getValue();

        return $user;
    }
}