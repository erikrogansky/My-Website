@component('mail::message')
# Hi {{ $name }},

Thank you for contacting me!

This is to inform you, that I have received your message and will try to respond as soon as possible.

@component('mail::button', ['url' => $mailData['url']])
Visit My Website
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent