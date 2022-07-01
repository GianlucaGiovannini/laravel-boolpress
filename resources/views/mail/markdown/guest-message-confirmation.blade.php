@component('mail::message')
# Introduction

Thanks for writing us, we will get back to you asap.

Name: {{$message->full_name}} <br>

Email: {{$message->email}} <br>

Subject {{$message->subject}} <br>

Il tuo messaggio: <br>

{{$message->message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
