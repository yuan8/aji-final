<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use Auth;
class EventCtrl extends Controller
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
        ->with('MeReservedStatus')
        ->paginate(env('API_PAGINATE'));


        $custom = collect(
            [
                'code' =>(int)env('API_CODE_SUCCESS'),
                'message'=>'success get all event'
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
    public function store(Request $request)
    {
        //
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

         $event=Event::withCount([
            'MeReserved',
            'HaveEventReservations as peopleApprovedReservation'=>function($q){
               return  $q->where('is_approved',1);
            }
        ])
         ->with(['HaveEventReservations.FromUser','MeReservedStatus'])
         ->find($id);
         
        if($event){

            return array(
                'code'=>env('API_CODE_SUCCESS'),
                'data'=>$event,
                'message'=>'success'
            );

        }else{

            return array(
                'code'=>env('API_CODE_ERR'),
                'data'=>null,
                'message'=>'success'
            );

        }
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
       $event=Event::find($id);
        if($event){

            return array(
                'code'=>env('API_CODE_SUCCESS'),
                'data'=>$event,
                'message'=>'success'
            );

        }else{

            return array(
                'code'=>env('API_CODE_ERR'),
                'data'=>null,
                'message'=>'success'
            );
        }

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

        $event=Event::find($id);
        if($event){
            $dell=$event->softDelete();
            return array(
                'code'=>env('API_CODE_SUCCESS'),
                'data'=>$event,
                'message'=>'delete success'
            );

        }else{
            return array(
                'code'=>env('API_CODE_ERR'),
                'data'=>null,
                'message'=>'delete success'
            );

        }
    }
}
