<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('index');
});

Route::get('/lang/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    
    return redirect()->back();
})->name('langSwitch');

Route::post ('/send-mail',[MailController::class,'maildata'])->name('send_mail');