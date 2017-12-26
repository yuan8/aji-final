<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    //


	public function index(Request $request){

		if(isset($request->q)){
			if($request->q=='upcoming'){

				$events=Event::orderBy('time','DESC')
				->where('time','>=',Carbon::now())
				->withCount(['HaveEventReservations as joined'=>function($query){
					return $query->where('is_approved',true);
				}])->get();

			}else if($request->q=='populer'){

				$events=Event::orderBy('time','DESC')
				->withCount(['HaveEventReservations as joined'=>function($query){
					return $query->where('is_approved',true);
				}])->orderBy('joined_count','DESC')->get();
	
			}

			else if($request->q=='past'){

				$events=Event::orderBy('time','DESC')
				->where('time','<=',Carbon::now())
				->withCount(['HaveEventReservations as joined'=>function($query){
					return $query->where('is_approved',true);
				}])->get();
				
			}else{
				$events=Event::orderBy('time','DESC')->withCount(['HaveEventReservations as joined'=>function($query){
					return $query->where('is_approved',true);
				}])->get();
			}

		}else{
			$events=Event::orderBy('time','DESC')->withCount(['HaveEventReservations as joined'=>function($query){
				return $query->where('is_approved',true);
			}])->get();
		}
		

			$events_know=Event::orderBy('created_at','DESC')->withCount(['HaveEventReservations as joined'=>function($query){
				return $query->where('is_approved',true);
			}])->get();

		return view('pages.event.event')->with('events',$events)->with('events_know',$events_know);

	}

}
