<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Posts;

class PostTags extends Model
{
    //

    protected $table='post_tags';
	protected $fillable=[
		'id',
		'user_id'
		'created',
		'post_id'
	];



	public function FromUser(){
		return $this->belongsTo(User::class,'user_id');
	}

	public function FromPost(){
		return $this->belongsTo(Posts::class,'post_id');
	}
}
