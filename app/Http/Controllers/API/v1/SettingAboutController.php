<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\SettingAbout;

class SettingAboutController extends Controller
{
    //


    public function setting(Request $request){

    	$setting=SettingAbout::where('user_id',Auth::user()->id)->first();

    	
    	$data=array();
    	$data1=array();

    	if($setting){

    		if(isset($request->member_number)){
    			$setting->member_number=$request->member_number;
    		}


    		if(isset($request->birth_day)){
    			$setting->birth_day=$request->birth_day;
    		}

    		if(isset($request->phone)){
    			$setting->phone=$request->phone;

    			
    		}

    		if(isset($request->email)){
    			$setting->email=$request->email;
    			
    		}

    		if(isset($request->address)){
    			$setting->address=$request->address;

    			
    		}

    		if(isset($request->blood)){
    			$setting->blood=$request->blood;

    		}

    		

    		$res=$setting->save();
    		if($res){
    			return array(
    				'code'=>200,
    				'data'=>SettingAbout::where('user_id',Auth::user()->id)->first(),
    				'message'=>'success update'
    			);
    		}

    	}
    }

}
