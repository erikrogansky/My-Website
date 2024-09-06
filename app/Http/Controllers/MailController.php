<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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

        $validator = Validator::make($input, [
            'g-recaptcha-response' => 'required|recaptchav3:send_message,0.5'
        ]);

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|max:32',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);
        
        $token = $request->input('g-recaptcha-response');

 
        $response = Http::post('https://recaptchaenterprise.googleapis.com/v1/projects/my-website-recap-1725601492278/assessments?key=AIzaSyBbc_EoWhWB7dl9fWQAOJ5w_-gy8s9pSxw', [
             'event' => [
                'token' => $token,
                'siteKey' => "6Ld2_zcqAAAAAPO4FWBhvwnSrWKSXYiMRjhKiGQQ",
            ],
        ]);

        $body = $response->json();
        
        if (isset($body['riskAnalysis']['score'])) {
            $score = $body['riskAnalysis']['score'];
            
            if ($score < 0.5) {
                $request->session()->flash('successMessage', "You failed reCAPTCHA.");
                return redirect('/');
            }
        } else {
            \Log::error('ReCAPTCHA response is missing the riskAnalysis score');
            $request->session()->flash('successMessage', "reCAPTCHA validation failed");
            return redirect('/');
        }  
        
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