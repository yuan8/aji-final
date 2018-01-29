<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\EventReservation;
use App\Event;
use Auth;
use Validator;


class EventReservationCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $event=Event::withCount([
            'MeReserved',
            'HaveEventReservations as peopleApprovedReservation'=>function($q){
               return  $q->where('is_approved',1);
            }
        ])
        ->with(['MeReservedStatus'])
        ->whereHas('MeReserved')
        ->paginate(env('API_PAGINATE'));


        $custom = collect(
            [
                'code' =>(int)env('API_CODE_SUCCESS'),
                'message'=>'success get all event reservation log'
            ]
        );
        $event = $custom->merge($event);



        return $event;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,Request $request)
    {
        //
        
        $reservation=EventReservation::where('user_id',Auth::user()->id)->where('event_id',$id)->first();

        if($reservation){
            
            return array(
                'code'=>env('API_CODE_ERR'),
                'message'=>'cant create double reservation',
                'data'=>null
            );

        }else{
            $reservation=EventReservation::create(
                [
                    'event_id'=>$id,
                    'user_id'=>Auth::user()->id
                ]
            );

            $event=Event::withCount(
            [
                    'MeReserved',
                    'HaveEventReservations as peopleApprovedReservation'
            ])->where('id',$id)->first();

            return array(
                'code'=>env('API_CODE_SUCCESS'),
                'message'=>'success reservation event',
                'data'=>$event
            );


        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
