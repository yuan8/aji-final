<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EventReservation;

class Event extends Model
{
    //

    protected $fillable=['id','title','time','image','content','start_date','address','fee','quota','created_at','updated_at'];
	 
	public function HaveEventReservations(){
	    return $this->hasMany(EventReservation::class,'event_id');
	}
	


    
}
