<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $name = 'Joe';
        $users = array(
            
            "name" => "Joe John",
            "email" => "joej@gmail.com",
            "phone" => "1234567"
              
        );
        return view ('user', compact('name', 'users'));
    }
}
