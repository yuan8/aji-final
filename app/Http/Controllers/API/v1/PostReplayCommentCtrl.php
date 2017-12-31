<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\PostComments;
use App\Post;
class PostReplayCommentCtrl extends Controller
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

         $validator = Validator::make($request->all(), [
             'post_id' => 'required|numeric',
             'content' => 'string',

         ]);

        if ($validator->fails()) {
           return array(
             'code'=>500,
             'message'=>'error validation data request',
             'data'=>$validator->messages(),
           );
        }

        $comment=PostComments::create([
            'post_id'=>$request->$post_id,
            'content'=>$request->content,
            'user_id'=>Auth::user()->id,
            'status'=>1

        ]);

        if($comment){
            return array(
                'code'=>200,
                'data'=>PostComments::where('id',$comment->id)->with('FromUser')->first(),
                'message'=>"success add comment"
            );

        }else{
            return array(
                'code'=>500,
                'data'=>$comment->with('FromUser'),
                'message'=>"can't add comment"
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
        $comment=PostComments::find($id);
        if($comment){
            $comment->softDelete();

            return array(
                'code'=>200,
                'data'=>$comment,
                'message'=>"success add comment"
            );

        }else{
            return array(
                'code'=>500,
                'data'=>null,
                'message'=>"data not found"
            );            

        }
    }
}
