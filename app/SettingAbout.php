<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class SettingAbout extends Model
{
    //

    protected $table='setting_about';

    protected $fillable=[
    	'id',
    	'user_id',
    	'blood',
    	'birth_day',
    	'address',
    	'phone',
    	'email',
    	'member_number',
    	'created_at',
    	'updated_at'
    ];


    public function FromUser(){
    	return $this->belongsTo(User::class,'user_id');
    }
}
