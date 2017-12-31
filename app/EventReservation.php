<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;
use App\User;
class EventReservation extends Model
{
    //

    protected $fillable=['id','event_id','user_id','attachment','is_approved','created_at','updated_at'];

    public function FromEvent(){
    	return $this->belongsTo(Event::class,'event_id');
    }

     public function FromUser(){
    	return $this->belongsTo(User::class,'user_id');
    }
}
