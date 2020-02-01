<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
      return view('home');
    }

    public function getDashboard(){
      return view('dashboard');
    }

    public function getContact(){
      return view('contact');
    }

    public function getInquiry(){
      return view('messages');
    }
}
