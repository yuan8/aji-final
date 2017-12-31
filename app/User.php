<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Cities;
use App\Posts;
use App\PostLikes;
use App\PostComments;
use App\PostTags;
use App\UserPicture;
use App\SettingAbout;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'id', 
        'email', 
        'password',
        'username',
        'phone',
        'group_id',
        'city_id',
        'cover_photo',
        'profile_photo',
        'short_bio',
        'place_birth',
        'date_birth',
        'blood_type',
        'cretaed_at',
        'api_token',
        'is_actived',
        'updated_at',
        'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','is_actived','api_token'
    ];

    public function FromCity(){
        return $this->belongsTo(Cities::class,'city_id');
    }

    public function HavePosts(){
        return $this->hasMany(Posts::class,'user_id');
    }

    public function HavePostLikes(){
        return $this->hasMany(PostLikes::class,'user_id');
    }

    public function HavePostComments(){
        return $this->hasMany(PostComments::class,'user_id');
    }

    public function HavePostTags(){
        return $this->hasMany(PostTags::class,'user_id');
    }

    public function HaveUserPictures(){
        return $this->hasMany(UserPicture::class,'user_id');
    }


    public function getRole(){
        return $this->role;
    }


    public function HaveSettingAbout(){
        return $this->hasOne(SettingAbout::class,'user_id');
    }
    




}
