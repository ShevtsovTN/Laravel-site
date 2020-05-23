<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail;

class mailController extends Controller
{
    public function sendMail()
    {
        /*Mail::send(['text' => 'mail'], ['name', 'Real Estate'], function ($message) {
            $message->to('', '')->subject('Test');
            $message->from('', '');
        });*/
        return view('/contact');
    }
}
