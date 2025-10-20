<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home($value1, $value2, $value3){
        return view('home',['first'=>$value1, 'second'=>$value2, 'third'=>$value3]);
    }

    function About(){
        return view('about');
    }

    function Contact(){
        return view('contact');
    }
}
