<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

use App\User;
use App\PostLikes;
use App\PostComments;
use App\PostTags;
use App\Cities;
use App\PostFilePicture;
class Posts extends Model
{
    //


    protected $table='posts';
	protected $fillable=[
		'id',
		'kanal',
		'share_id',
		'ori_share_id',
		'content',
		'status',
		'user_id',
		'city_id',
		'created_at',
		'updated_at'
	];


	public function FromUser(){
		return $this->belongsTo(User::class,'user_id');
	}

	public function HavePostLikes(){
		return $this->hasMany(PostLikes::class,'post_id','id');
	}


	public function HavePostComments(){
		return $this->hasMany(PostComments::class,'post_id');
	}

	public function HavePostTags(){
		return $this->hasMany(PostTags::class,'post_id');
	}

	public function FromCity(){
		return $this->belongsTo(Cities::class,'city_id');
	}


	public function HavePostFilePictures(){
		return $this->hasMany(PostFilePicture::class,'post_id');
	}


	public function LikesBy(){
		return $this->hasMany(PostLikes::class,'post_id','id');
	}



}


