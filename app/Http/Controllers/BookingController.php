<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\event;

use Mail;

class BookingController extends Controller
{
    public function eventsecurity()
    {
        return view('auth.eventsecurity');
    }

    public function event()
    {
        return view('auth.event');
    }
    public function privatesecurity()
    {
        return view('auth.privatesecurity');
    }
    public function corporatesecurity()
    {
        return view('auth.corporatesecurity');
    }
    public function career()
    {
        return view('auth.career');
    }
    public function privacy()
    {
        return view('auth.privacy');
    }
    public function consultancy()
    {
        return view('auth.consultancy');
    }
    public function moreeventsecurity()
    {
        return view('auth.moreeventsecurity');
    }
    public function moreevent()
    {
        return view('auth.moreevent');
    }
    public function moreconsultant()
    {
        return view('auth.moreconsult');
    }
    public function morecorporatesecurity()
    {
        return view('auth.morecorporatesecurity');
    }
     public function moreprivatesecurity()
    {
        return view('auth.moreprivatesecurity');
    }
    public function gallery()
    {
        return view('auth.gallery');
    }
     public function news()
    {
        return view('auth.news');
    }
    public function booksecurityevent(Request $request)
    {
    	$input = $request->all();
        $input['date_event'] =date('l j F Y',strtotime($request['date_event']));
        //dd($input);

        Mail::send('emails.eventsecuritymail', $input, function($message) use ($input) {
            $message->to('olabiyi.sam@gmail.com');
            $message->from('whalexyee@yahoo.com');
        });    	
    	//event::create($input);
        session()->flash('register','Thank You for Choosing Arenaluxuries, We would get back to you');
    	return redirect()->back(); 

    }

    public function bookevent(Request $request)
    {
        $input = $request->all();
        $input['date_event'] =date('l j F Y',strtotime($request['date_event']));
        //dd($input);

        Mail::send('emails.eventmail', $input, function($message) use ($input) {
            $message->to('olabiyi.sam@gmail.com');
            $message->from('whalexyee@yahoo.com');
        });     
        session()->flash('register','Thank You for Choosing Arenaluxuries, We would get back to you');
        return redirect()->back();  
    }

    public function bookprivatesecurity(Request $request)
    {
        $input = $request->all();
        $input['date_event'] =date('l j F Y',strtotime($request['date_event']));
        //dd($input);

        Mail::send('emails.privatesecuritymail', $input, function($message) use ($input) {
            $message->to('olabiyi.sam@gmail.com');
            $message->from('whalexyee@yahoo.com');
        });     
        session()->flash('register','Thank You for Choosing Arenaluxuries, We would get back to you');
        return redirect()->back();  
    }

    public function bookcorporatesecurity(Request $request)
    {
        $input = $request->all();
        $input['date_event'] =date('l j F Y',strtotime($request['date_event']));
        Mail::send('emails.corporatesecuritymail', $input, function($message) use ($input) {
            $message->to('olabiyi.sam@gmail.com');
            $message->from('whalexyee@yahoo.com');
        });     
        session()->flash('register','Thank You for Choosing Arenaluxuries, We would get back to you');
        return redirect()->back();  
    }

    public function bookconsult(Request $request)
    {
        $input = $request->all();
        Mail::send('emails.consultmail', $input, function($message) use ($input) {
            $message->to('olabiyi.sam@gmail.com');
            $message->from('whalexyee@yahoo.com');
        });     
        session()->flash('register','Thank You for Choosing Arenaluxuries, We would get back to you');
        return redirect()->back();  
    }
    public function inquiry(Request $request)
    {
        $input = $request->all();
        Mail::send('emails.enquiry', $input, function($message) use ($input) {
            $message->to('olabiyi.sam@gmail.com');
            $message->from('whalexyee@yahoo.com');
        });     
        session()->flash('register','Thank You for Choosing Arenaluxuries, We would get back to you');
        return redirect()->back();  
    }

}
