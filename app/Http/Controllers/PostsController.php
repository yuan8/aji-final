<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;

use App\PostFilePicture;

class PostsController extends Controller
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


        $city=Auth::user()->FromCity->id;
        $kanal="national";

        if($request->kanal==0){
            $kanal='national';

        }
        else if(Auth::user()->city_id==$request->kanal){
            $kanal='kota';
            $city=$request->kanal;

        }
        else{
            if(Auth::user()->role==3){
                $kanal='kota';
                $city=$request->kanal;

            }else{
                return back();
            }
        }

        if($kanal!=null){

            $post=Posts::create([
                "user_id"=>Auth::user()->id,
                "content"=>$request->content,
                "kanal"=>$kanal,
                "city_id"=>$city,
                "status"=>0
            ]);

            if($post){
                if($request->file('files')){

                    $files=$request->file('files');
                    foreach ($files as $filep) {

                       $file=$filep;
                       $time=substr(md5(Auth::user()->id), 0, 5).substr(md5(rand(0, 666)), 0, 3).'-'.rand(0, 1000).'-'.rand(0, 100000);
                       $extension = $file->getClientOriginalExtension();
                       $fileName=$post->id.'-'.$time.'.'.$extension;
                       $file=$file->storeAs('public/posts/photos',$fileName);
                       $urlPublic= Storage::url($file);

                       if($urlPublic){
                            PostFilePicture::create([
                                "extension"=>$extension,
                                "url"=>$urlPublic,
                                "post_id"=>$post->id
                            ]);
                        }
                     }

                     return back();

                }else{
                    return back();

                }


        }
    }else{
        return back();
    }






}

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
