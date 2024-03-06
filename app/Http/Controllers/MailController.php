<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        Mail::to('thanhtooaung2126@gmail.com')->send(new SignUp());
        return view('welcome');
    }
}
// yezawhtet.web@gmail.com
