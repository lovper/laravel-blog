<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(){
        return view('home');
    }

    public function posts(){
        return view('posts');
    }

    public function about(){
        return view('about');
    }

}
