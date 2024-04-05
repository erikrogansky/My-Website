@component('mail::message')
# Hi {{ $name }},

{{ $senderMessage }}

I have received your email and will try to respond quickly.

@component('mail::button', ['url' => $mailData['url']])
Visit Our Website
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent