@extends('template.emails.layout')

@section('content')
            
                        
<h1 style="display: block;margin: 0;padding: 0;color: #202020;font-family: Helvetica;font-size: 26px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: normal;text-align: left;"><strong><center>Event Security Booking</center></strong>
</h1>

<br>
Hi Admin!,
<br><br>
Find my details below
<br><br>
First Name: <span style="float: right;">{{$first_name}}</span>
<br> 
Last Name: <span style="float: right;">{{$last_name}}</span>
<br>
Email: <span style="float: right;">{{$email}}</span>
<br> 
Phone: <span style="float: right;">{{$phone}}</span>
<br> 
Event Type: <span style="float: right;">{{$event_type}}</span>
<br> 
Address: <span style="float: right;">{{$address}}</span>
<br> 
Event Location: <span style="float: right;">{{$event_location}}</span>
<br> 
Number of Guests: <span style="float: right;">{{$no_guest}}</span>
<br> 
Alcohol: <span style="float: right;">{{$alcohol}}</span>
<br>
Number of Dignitries/VIP: <span style="float: right;">{{$vip}}</span>
<br> 
Date of Event: <span style="float: right;">{{$date_event}}</span>
<br> 
Time of Event: <span style="float: right;">{{$time_event}}</span>
<br> 
Contact Phone Number: <span style="float: right;">{{$contact_phone}}</span>
<br> 
Team:  <span style="float: right;">{{$team}}</span>
<br><br><br>
Best Regards,
<p style="margin: 10px 0;padding: 0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #202020;font-family: Helvetica;font-size: 16px;line-height: 150%;text-align: left;"> &nbsp;
ArenaLuxuries Team</p>

@endsection