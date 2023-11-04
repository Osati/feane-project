<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }

    public function about(){
        return view('front-end.home.about');
    }
    public function menu(){
        return view('front-end.home.menu');
    }
     public function book(){
            return view('front-end.home.book');
        }

}
