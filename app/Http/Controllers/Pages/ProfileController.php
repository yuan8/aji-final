<?php

namespace App\Http\Controllers\pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

use App\Posts;
use Auth;
use App\UserPicture;
class ProfileController extends Controller
{
    //


    public function timeline($user_id){

    	$user = User::find($user_id);

    	 // $posts = Posts::where('posts.user_id',$user_id)->withCount([
      //       'HavePostLikes as me_like' => function ($query) use ($user_id) {
      //           $query->where('user_id',Auth::user()->id);
      //       }
      //   ],'HavePostLikes as like','HavePostComment as comment')
      //    ->orderBy('posts.id','DESC')->get();

         $posts=Posts::where('user_id',$user_id)
                ->orderBy('created_at','DESC')
                ->withCount(['HavePostLikes as me_like'=>function($query){
                    $query->where('user_id',Auth::user()->id);
                },'HavePostLikes as like','HavePostComments as comment'])
                ->paginate(10); 



    	 return view('pages.profile.profile')
    	 			->with('user',$user)
    	 			->with('posts',$posts)
    	 			->with('menu','timeline');

    }



    public function photos($user_id){

    	$user = User::find($user_id);
        $pictures=UserPicture::where('user_id',$user->id)->orderBy('id','DESC')->get();

    	 return view('pages.profile.profile-photo')
    	 			->with('user',$user)
    	 			->with('menu','photos')
                    ->with('photos',$pictures);

    }
}
