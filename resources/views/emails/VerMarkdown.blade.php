@component('mail::message')
# Hello {{$name}}

Click the verification button below.

@component('mail::button', ['url' => $url])
Verify
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
