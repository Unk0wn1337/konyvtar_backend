<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Odupla',
            'body' => 'https://www.rap.hu/wp-content/uploads/2020/05/Fh%C3%A9szek.jpg'
        ];       
        Mail::to('kadarkrisi@gmail.com')
 /* ->cc($moreUsers)
         ->bcc($evenMoreUsers) */
    ->send(new DemoMail($mailData));
        dd("Email küldése sikeres.");
    }
 
}
