<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Mail;

class MailController extends Controller {

    public function mailform() {
        return view('mail');
    }

    public function maildata(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $subject = $request->subject;
        $message = $request->message;
        $mailData = [
            'url' => 'https://roganskyerik.com/',
        ];
        $send_mail = "info@roganskyerik.com";
        Mail::to($send_mail)->send(new SendMail($name, $email, $phone, $subject, $message));

        Mail::to($email)->send(new SendMessageToEndUser($name,$mailData));

        $successMessage = "Your message has been sent sucessfully!";

        $request->session()->flash('successMessage', $successMessage);

        return redirect('/');
    }
}