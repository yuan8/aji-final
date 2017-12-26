<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Posts;
use App\User;
use App\ReplayCommentPost;

class PostComments extends Model
{
    //

    protected $table='post_comments';
	protected $fillable=[
		'id',
		'user_id',
		'post_id',
		'content',
		'status',
		'updated_at',
		'created_at'
	];


	public function FromUser(){
		return $this->belongsTo(User::class,'user_id');
	}

	public function FromPost(){
		return $this->belongsTo(Posts::class,'post_id');
	}
	public function HaveReplayCommentPosts(){
		return $this->hasMany(ReplayCommentPost::class,'post_comment_id');
	}

}
