<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home($value1, $value2, $value3){
        // return view('home');
        return 'This value is: ' .$value1 .' ' .$value2 .' ' .$value3;
    }

    function About(){
        return view('about');
    }

    function Contact(){
        return view('contact');
    }
}
