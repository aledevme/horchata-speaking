<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;


class MessageController extends Controller
{
    public function store(){
        $message = request()->validate([
            'name' => 'required|min:1',
            'email' => 'required|email',
            'subject'=>'required|min:1',
            'content' => 'required|min:3'
        ],[
            'name.required' => __('This field is required')
        ]);

        Mail::to('alexgve7@gmail.com')->queue(new MessageReceived($message));

        return back()->with('Message','Correo enviado correctamente');
    }
}
