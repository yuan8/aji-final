<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Image;

use Validator;
use Illuminate\Support\Facades\Storage;
use App\Cities as City;

class UserCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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

        $user=User::find($id);

        if(Auth::user()->id==$id){
            $user['its_me_count']=1;
        }else{
            $user['its_me_count']=0;
        }

        if($user){

            return array(
                'code'=>env('API_CODE_SUCCESS'),
                'data'=>$user,
                'message'=>"success get detail user "
            );

        }else{
            return array(
                'code'=>env('API_CODE_ERR'),
                'data'=>null,
                'message'=>"can't get detail user"
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


    public function avatar(Request $request){

        $validator = Validator::make($request->all(), [
           'avatar' => 'required|file',
       ]);

        if($validator->fails()) {
         return array(
           'code'=>env('API_CODE_ERR'),
           'message'=>'error validation data request',
           'data'=>$validator->messages(),
        );

         }else{


            $filename=$request->file('avatar')->getClientOriginalName();
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $user=User::find(Auth::user()->id);
            Storage::makeDirectory('/public/image/'.Auth::user()->id);
            $publicP='/storage/image/'.Auth::user()->id.'/'.rand(1,1000).'-'.$filename;
            $public=public_path($publicP);
            $picD=Image::make($request->file('avatar'));
            $width= $picD->width();
            $height= $picD->height();
            $height=$height*500/$width;
            $picD->resize(500,$height);
            $picDx=$picD->save($public);

            $user->profile_photo=$publicP;
            $user->save();

            return array(
                'code'=>env('API_CODE_SUCCESS'),
                'message'=>'success update avatar',
                'data'=>$user
            );

        }

    }

    public function tag(Request $request){
        
        $user=User::query();
        $users = $user->where('is_actived',1)->where('username','LIKE','%'.$request->q.'%')
        ->orWhere(['name'=>'like %'.$request->q.'%'])->limit(5)->get();

        return array(
            'code'=>env('API_CODE_SUCCESS'),
            'message'=>'success get data for tag',
            'data'=>$users

        );
    }


}
