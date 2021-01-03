@component('mail::message')

Thanks for your query of -  "{{$query->textbox}}"

We will get in touch as soon as possible.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
