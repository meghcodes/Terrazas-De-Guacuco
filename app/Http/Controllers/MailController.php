<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\demomail;

class MailController extends Controller
{
    public function index() 
    {
        $mailData = [
            'title' => 'welocome',
            'body' => 'testing 1 2 3',
        ];
        Mail::to('terrazasdeguacuco@gmail.com').send(new demomail($mailData));
        dd('sent');
    }
}
