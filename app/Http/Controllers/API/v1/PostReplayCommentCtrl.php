<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\ReplayCommentPost;
use App\Post;
use Auth;
use Illuminate\Support\Facades\Storage;

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
             'comment_id' => 'required|numeric',
             'content' => 'string',
             'comment_image'=>'file'

         ]);



        if ($validator->fails()) {
             return array(
               'code'=>500,
               'message'=>'error validation data request',
               'data'=>$validator->messages(),
           );
         }


         if($request->file('comment_image')OR($request->content)){

            $comment=ReplayCommentPost::create([
                'post_comment_id'=>$request->comment_id,
                'content'=>$request->content,
                'user_id'=>Auth::user()->id,
             
            ]);
            if($request->file('comment_image')){

                $file=$request->file('comment_image');
               $time=substr(md5(Auth::user()->id), 0, 5).substr(md5(rand(0, 666)), 0, 3).'-'.rand(0, 1000).'-'.rand(0, 100000);
               $extension = $file->getClientOriginalExtension();
               $fileName=$comment->id.'-'.$time.'.'.$extension;
               $file=$file->storeAs('public/posts/comment/replay',$fileName);
               $urlPublic= Storage::url($file);

               if($urlPublic){
                    $comment->image_url=$urlPublic;
                    $comment->thumbnail=$urlPublic;
                    $comment->save();
                }

            }

            if($comment){
                return array(
                    'code'=>200,
                    'data'=>ReplayCommentPost::where('id',$comment->id)->with('FromUser')->first(),
                    'message'=>"success add comment"
                );

            }else{
                return array(
                    'code'=>500,
                    'data'=>null,
                    'message'=>"can't add comment"
                );

            }



        }
        else{
            return array(
                'code'=>500,
                'data'=>null,
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
