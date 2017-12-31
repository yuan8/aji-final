<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostLikes;
use App\PostComments;
use Auth;
use Validator;


class PostController extends Controller
{
    //

    public function likePost($post_id,Request $request){

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

    public function commentPost(Request $request, $post_id){

        


    }


}
