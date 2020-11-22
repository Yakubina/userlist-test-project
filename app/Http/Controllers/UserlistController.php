<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Userlist\Push\Client as Userlist;
use Userlist\Laravel\Services\DirectPush;
use Userlist\Push;

class UserlistController extends Controller
{
    public function index()
    {
        $userlist = new Push();
        $userData = [
            'name'       => 'User2',
            'identifier' => 2
        ];

        $userlist->user($userData);
//        $userlist->user();

        $user = new DirectPush();

        $user->user($userData);
    }
}
