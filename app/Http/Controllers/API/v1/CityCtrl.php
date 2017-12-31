<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cities as City;
class CityCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $city=City::all();


         if($city){
             return array(
                'code'=>env('API_CODE_SUCCESS'),
                'data'=>$city,
                'message'=>'success get all city',
            );

        }else{

             return array(
                'code'=>env('API_CODE_ERR'),
                'data'=>null,
                'message'=>'can not get all city',
            );
        }

    }


    public function indexListView(){
        
         $city=City::all();


         if($city){
             return array(
                'code'=>env('API_CODE_SUCCESS'),
                'data'=>$city,
                'message'=>'success get all city',
            );

        }else{

             return array(
                'code'=>env('API_CODE_ERR'),
                'data'=>null,
                'message'=>'can not get all city',
            );
        }

        
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
