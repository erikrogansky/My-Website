<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use App\Models\FormUser;
use Mail;

class MailController extends Controller {

    public function mailform() {
        return view('mail');
    }

    public function maildata(Request $request) {

        $input = request()->all();

        if (!empty($input['address'])) {
            return redirect('/');
        }

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|max:32',
            'subject' => 'required|string',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|recaptchav3:send_message,0.5'
        ]);

        $userComment = new FormUser();
        $userComment->name = $request->input('name');
        $userComment->email = $request->input('email');
        $userComment->phone = $request->input('phone');
        $userComment->subject = $request->input('subject');
        $userComment->message = $request->input('message');
        $userComment->save();



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