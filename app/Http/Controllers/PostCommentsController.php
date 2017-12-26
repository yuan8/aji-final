<?php

namespace App\Http\Controllers;

use App\PostComments;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;

use App\PostFilePicture;
class PostCommentsController extends Controller
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


        $postComments=PostComments::create([
            "post_id"=>$request->post_id,
            "user_id"=>Auth::user()->id,
            "content"=>$request->content,
            'kanal'=>$request->kanal
            "status"=>0
        ]);


        if($postComments){
            return back();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostComments  $postComments
     * @return \Illuminate\Http\Response
     */
    public function show(PostComments $postComments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostComments  $postComments
     * @return \Illuminate\Http\Response
     */
    public function edit(PostComments $postComments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostComments  $postComments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostComments $postComments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostComments  $postComments
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostComments $postComments)
    {
        //
    }
}
