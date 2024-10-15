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
            'body' => 'itt vannak a Fhészek
minden nap készek
berepülést végzek
ez az érzet, ami készre tesz
ez nem a szesz
hanem a friss mokoja
a tisztáson sok span mókolja
telibe csókolja
nincsen gondja, mint a Nils Holgerson-ba
messze van a Volga
de tiszta a vize, mint a kóla
lassan euróba
fizetek, ez nem piskóta
osztrákba osztásra
rábólintok sok faszságra
Steve szavára
áramot vezetek más ágyába
ha atyával gyatyázok
nem harapok ostyába
bankot rabolni csak csuklyába
csukafejest ugrok a Dunába
ha csókák csókolóznak csip-csup csókába
a Csokonai utcába
Krome-nál flottába
kottába rakjuk a nótánkat
nevünket nem rakjuk szótárba
szívesen szurkolok neked turbánba
ha belefújsz a fuvolámba
Kispesten kiskertemben sok faszfejjel kell megismerkednem
a sarkon csak az öreg, vén, kiéhezett kurvák
a fullosak meg azt mondják: irány Olaszország
fitness-t oktatni
de nem olyan könnyű minket átvágni
ezt át kell látni
a gondon túl kell magad tenni
meg ne próbáld a késedet a Fhészekre fenni
na asszem ennyi'
        ];       
        Mail::to('kadarkrisi@gmail.com')
 /* ->cc($moreUsers)
         ->bcc($evenMoreUsers) */
    ->send(new DemoMail($mailData));
        dd("Email küldése sikeres.");
    }
 
}
