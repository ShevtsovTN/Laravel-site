<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class MailSendController extends Controller
{
    public function sendMail(ContactFormRequest $request)
    {
        Mail::send(new ContactForm($request));
        /*$response = [
            'status' => 'true',
            'message' => 'Ваше сообщение успешно отправлено.'
        ];*/
        return view('contact');
    }
}
