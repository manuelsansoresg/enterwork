<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendContact(ContactRequest $request)
    {
        print_r($request->interesado);
        Mail::to('hola@enterwork.mx')->send(new ContactMail($request->all()));
        //Mail::to('manuel@mexicoindie.com.mx')->send(new ContactMail($request->all()));
        return $request->json('ok');
    }
}
