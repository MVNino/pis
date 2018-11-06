@component('mail::message')
<p>Greetings!</p>

@component('mail::panel')
Your appointment to Dra. Joy Gali has been approved. <br>
Your schedule is on <b><label>{{ date('F d, Y', strtotime($date)) }}</label> 
<label>{{ date('g:i A', strtotime($time)) }}</label> at <label>East Avenue, Quezon City.</label></b>
@endcomponent
<br>
Hope to see you!
<br>
Thank you!
@endcomponent
