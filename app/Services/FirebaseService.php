<?php

namespace App\Services;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Exception\Auth\EmailExists as FirebaseEmailExists;


class FirebaseService
{
    public $firebase;

    public function __construct()
    {
        $this->firebase = (new Factory)
        ->withDatabaseUri('https://shibafood-3e0d0.firebaseio.com')
        ->withServiceAccount('C:\\xampp\\htdocs\\Shiba\\app\\Services\\FirebaseKey.json');
    }
    public function verifyPassword($email, $password)
    {
        try {
            $response = $this->firebase->getAuth()->verifyPassword($email, $password);
            return $response->uid;

        } catch(FirebaseEmailExists $e) {
            logger()->info('Error login to firebase: Tried to create an already existent user');
        } catch(Exception $e) {
            logger()->error('Error login to firebase: ' . $e->getMessage());
        }
        return false;
    }

}