<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserPicture extends Model
{
    //


    protected $table="user_pictures";

    protected $fillable=[
    	'id',
    	'url',
    	'up_from',
    	'created_at',
    	'user_id',
    	'mime',
    	'caption'

    ];

    public function FromUser(){
    	return $this->belongsTo(User::class,'user_id');
    }
}
