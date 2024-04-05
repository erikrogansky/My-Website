@component('mail::message')
# Name: {{ $name }}
# Email: {{ $email }}<br>
# Phone: {{ $phone }}<br>
Subject: {{ $subject }} <br><br>
Message:<br> {{ $message }}
Visit Our Website
Thanks,
{{ config('app.name') }}
@endcomponent