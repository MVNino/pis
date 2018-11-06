@component('mail::message')
Greetings!

@component('mail::panel')
We regret to inform you that your requested appointment has been rejected. 
Please click the link below for appointment reschedule.
@endcomponent

@component('mail::button', ['url' => 'http://dra-joy-gali.pupbsit4-1.tech/'])
Our Home Page
@endcomponent
<br>

We sincerely apologize for any inconvenience.
<br>
Thank you!
@endcomponent
