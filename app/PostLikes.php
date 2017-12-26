<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Posts;
use App\User;


class PostLikes extends Model
{
    //

    protected $table='post_likes';
	protected $fillable=[
		'id',
		'user_id',
		'post_id',
		'created'
	];

	public $timestamps = false;

	public function FromUser(){
		return $this->belongsTo(User::class,'user_id');
	}

	public function FromPost(){
		return $this->belongsTo(Posts::class,'post_id');
	}
}
