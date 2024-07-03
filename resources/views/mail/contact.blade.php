@component('mail::message')
# You have received a new contact form submission
from {{$firstName}} - {{$lastName}}, tel : {{$phoneNumber}}
email {{$email}}

@component('mail::panel')
    {{$msg}}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
