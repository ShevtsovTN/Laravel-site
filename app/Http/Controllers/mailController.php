<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail;

class mailController extends Controller
{
    public function sendMail()
    {
        Mail::send();
        return view('/contact');
    }
}
