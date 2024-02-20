<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
    return view ('home');
}

public function contact(){
    return view ('contact');
}

// public function experts(){
//     return view ('experts');
// }

// public function services(){
//     return view ('services');
// }

// public function edu(){
//     return view ('edu');
// }
}