<?php

namespace App\Mail;

use App\Http\Requests\ContactFormRequest;
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
    protected $name;

    /**
     * Contact Form user phone.
     *
     * @var
     */
    protected $phone;

    /**
     * Contact Form user email.
     *
     * @var string
     */
    protected $email;

    /**
     * Contact Form user message.
     *
     * @var string
     */
    protected $message;

    /**
     * Create a new message instance.
     *
     * @param ContactFormRequest $request
     */
    public function __construct(ContactFormRequest $request = null)
    {
        $this->name = $request->name;
        $this->phone = $request->phone;
        $this->email = $request->email;
        $this->message = $request->message;
        $this->to = [['address' => env('MAIL_TO_ADDRESS'), 'name' => env('MAIL_TO_ADDRESS')]];
        $this->subject = 'Сообщение формы обратной связи сайта "' . config('app.name') . '"';
    }

    /**
     * Build the message.
     *
     * @return ContactForm
     */
    public function build()
    {
        $data = [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message
        ];
        //dd($data);
        return $this->markdown('emails.email', compact('data'));
    }
}
