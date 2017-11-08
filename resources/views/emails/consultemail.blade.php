@extends('template.emails.layout')

@section('content')
            
                        
<h1 style="display: block;margin: 0;padding: 0;color: #202020;font-family: Helvetica;font-size: 26px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: normal;text-align: left;"><strong><center>General Consultancy</center></strong>
</h1>

<br>
Hi Admin!,
<br><br>
Find below my details
<br><br>
First Name: <span style="float: right;">{{$first_name}}</span>
<br> 
Last Name: <span style="float: right;">{{$last_name}}</span>
<br>
Email: <span style="float: right;">{{$email}}</span>
<br> 
Phone: <span style="float: right;">{{$phone}}</span>
<br> 
Job Description: <span style="float: right;">{{$job_description}}</span> <br>
<br><br><br>
Best Regards,
<p style="margin: 10px 0;padding: 0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #202020;font-family: Helvetica;font-size: 16px;line-height: 150%;text-align: left;"> &nbsp;
ArenaLuxuries Team</p>

@endsection