@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => $url, 'color' => 'success'])
Cliquez ici
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
