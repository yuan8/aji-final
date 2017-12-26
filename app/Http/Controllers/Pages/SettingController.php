<?php

namespace App\Http\Controllers\PageS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use App\SettingAbout;
class SettingController extends Controller
{
    //


    public function index(){

    	$settings=SettingAbout::where('user_id',Auth::user()->id)->first();
    	return  View('pages.setting.setting')->with('settingAbout',$settings);
    }
}
