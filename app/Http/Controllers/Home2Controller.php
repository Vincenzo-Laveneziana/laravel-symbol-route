<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    public function index() {
        $name = 'Vincenzo';
        $last_name = 'Laveneziana';
        $phone = '333-3333333';
        $email = 'vincenzo.laveneziana@gmail.com';

        return view('home2.home2', compact('name', 'last_name', 'phone', 'email'));
    }
}
