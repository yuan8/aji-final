<?php

namespace App;

use App\User;
use App\Posts;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    //

	protected $table='cities';
	protected $fillable=['id','name']; 


	public function HaveUsers(){
		return $this->hasMany(User::class,'city_id');
	}

	public function HavePost(){
		return $this->hasMany(Posts::class,'post_id');
	}

}
