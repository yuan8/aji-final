<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostLikes;
use App\PostComments;
use Auth;

class PostController extends Controller
{
    //

    public function likePost($post_id,Request $request){
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
    					'message'=>'liked',

    				);
    		}
    	}




    } 

    public function commentPost(Request $request, $post_id){

        $comment=PostComments::create([
            'post_id'=>$post_id,
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


}
