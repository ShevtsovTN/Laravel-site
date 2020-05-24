<?php

namespace App\Mail;

use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Contact Form user name.
     *
     * @var  string
     */
    public $name;

    /**
     * Contact Form user phone.
     *
     * @var
     */

    public $phone;

    /**
     * Contact Form user email.
     *
     * @var string
     */
    public $email;

    /**
     * Contact Form user message.
     *
     * @var string
     */
    public $message;

    /**
     * Create a new message instance.
     *
     * @param FormRequest $request
     */
    public function __construct(FormRequest $request)
    {
        $this->name = $request->name;
        $this->phone = $request->phone;
        $this->email = $request->email;
        $this->message = $request->message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $data = [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message
        ];
        dd($data);
        //return $this->view('emails.email' , compact('data'));
    }
}
