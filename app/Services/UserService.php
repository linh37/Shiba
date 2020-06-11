<?php

namespace App\Services;

use Carbon\Carbon;
use App\Http\Controllers\Controller;

class UserService extends Controller
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