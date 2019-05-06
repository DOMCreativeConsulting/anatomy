<?php

namespace App\Controllers;
use App\Model\User;

class IndexController
{
    
    public function index()
    {

        User::check();

        $view = User::view();

        return view("index-$view");
        
    }

}
