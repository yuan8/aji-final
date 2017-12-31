<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use App\PostLikes;
class PostLikeCtrl extends Controller
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
         ]);

        if ($validator->fails()) {
           return array(
             'code'=>500,
             'message'=>'error validation data request',
             'data'=>$validator->messages(),
           );
        }

        $post_id=$request->post_id;

        $like=PostLikes::where('post_id',$post_id)
                ->where('user_id',Auth::user()->id)
                ->first();


        if($like){
            $result=$like->delete();
            if($result){
                return array(
                        'code'=>200,
                        'data'=>array('like'=>false,'data'=>$like),
                        'message'=>'unlike'
                    );
            }
        }else{
            $like=PostLikes::create(
                [
                    'post_id'=>$post_id,
                    'user_id'=>Auth::user()->id,
                    'timestamps'=>false
                ]
            );
            if($like){
                return array(
                        'code'=>200,
                        'data'=>array('like'=>true,'data'=>$like),
                        'message'=>'liked'
                );
            }
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
