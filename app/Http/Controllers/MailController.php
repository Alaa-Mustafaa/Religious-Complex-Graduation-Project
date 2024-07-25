<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //

    public function send(){
        $data=[
            "title"=>"Religious Complex",
            "body"=>"Hello lolo"
        ];

        Mail::to('alan.mustafa.2002@gmail.com')->send(new DemoMail($data));

        dd("Email send");
    }
}
