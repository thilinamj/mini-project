<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Auth;

class MainController extends Controller
{
   function index()
   {
       return view('login');
   }
   
   function ckecklogin(Requst $requst)
   {
    $this->validate($request, [
        'email'   => 'required|email',
        'password'  => 'required|alphaNum|min:3'
       ]);
   }

}
