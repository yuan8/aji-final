<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Validator;
use Image;
use App\Posts;
use App\PostFilePicture;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //


    public function editAbout(Request $request){

    	$user=User::find(Auth::user()->id);

    	$user=$user->update([

    		'name'=>$request->name,
    		'phone'=>$request->phone,
    		'short_bio'=>$request->short_bio,
    		'place_birth'=>$request->place_birth,
    		'blood_type'=>$request->blood_type

    	]);

    	return back();
    }


    public function chengeAvatar(Request $request){

        $validator = Validator::make($request->all(),[

         'avatar' => 'file',

     ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)
            ->withInput();
        }else{
            $filename=$request->file('avatar')->getClientOriginalName();
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $user=User::find(Auth::user()->id);
            Storage::makeDirectory('/public/image/'.Auth::user()->id);
            $publicP='/storage/image/'.Auth::user()->id.'/'.rand(1,1000).'-'.$filename;

            $public=public_path($publicP);
            $picD=Image::make($request->file('avatar'));
            $width= $picD->width();
            $height= $picD->height();
            $height=$height*500/$width;
            $picD->resize(500,$height);
            $picDx=$picD->save($public);

            $user->profile_photo=$publicP;
            $user->save();

            $post=Posts::create([
                'kanal'=>'national',
                'kota'=>Auth::user()->FromCity->id,
                'content'=>'Update Profile Picture',
                'user_id'=>Auth::user()->id,
                'status'=>0
            ]);

            $picture= PostFilePicture::create([
                "extension"=>$extension,
                "url"=>$publicP,
                "post_id"=>$post->id
            ]);



            return back();

        }



    }
}
