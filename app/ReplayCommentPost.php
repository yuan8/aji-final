<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\PostComment;
class ReplayCommentPost extends Model
{
    //
  	
    protected $table='replay_comment_posts';
	protected $fillable=[
    	'id',
    	'user_id',
    	'post_comment_id',
    	'image_url',
        'thumbnail',
    	'content',
    	'created_at',
    	'updated_at'
    ];


    public function FromUser(){
    	return $this->belongsTo(User::class,'user_id');
    }

    public function FromComment(){
    	return $this->belongsTo(PostComment::class,'post_comment_id');
    }
}
