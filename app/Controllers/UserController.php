<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }
}
