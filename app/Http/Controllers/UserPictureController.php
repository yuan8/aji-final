<?php

namespace App\Http\Controllers;

use App\UserPicture;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Auth;

class UserPictureController extends Controller
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

            $time=substr(md5(Auth::user()->id), 0, 5).substr(md5(rand(0, 666)), 0, 3).'-'.rand(0, 1000).'-'.rand(0, 100000);



            $file =$request->file('user_picture');
            $extension = $file->getClientOriginalExtension();
            $fileName=$time.'.'.$extension;
            $file=$file->storeAs('public/user/'.Auth::user()->id.'/photos',$fileName);
            $urlPublic= Storage::url($file);

            
            if($file){
                $picture=UserPicture::create([
                    'caption'=>$request->caption,
                    'user_id'=>Auth::user()->id,
                    'up_from'=>'web_laravel',
                    'mime'=>$extension,
                    'url'=>$urlPublic,
                ]);

            }

            if($picture){


            }

            return back();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserPicture  $userPicture
     * @return \Illuminate\Http\Response
     */
    public function show(UserPicture $userPicture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserPicture  $userPicture
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPicture $userPicture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserPicture  $userPicture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserPicture $userPicture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserPicture  $userPicture
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPicture $userPicture)
    {
        //
    }
}
