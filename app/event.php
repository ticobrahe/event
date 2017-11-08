<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
   protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'event_type','address','event_location','guess_no','alcohol','vip','date_event','contact_phone','team'
    ];
}
