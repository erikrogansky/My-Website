<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('index');
});

Route::get('privacy', function () {
    return view('privacy');
});

Route::get('terms', function () {
    return view('terms');
});

Route::get('/lang/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    
    $previous = url()->previous();
    $base = url()->to('/');
    
    if (substr($previous, 0, strlen($base)) === $base) {
        return redirect()->to($previous);
    } else {
        return redirect()->to('/');
    }
    
})->name('langSwitch');

Route::post ('/send-mail',[MailController::class,'maildata'])->name('send_mail');