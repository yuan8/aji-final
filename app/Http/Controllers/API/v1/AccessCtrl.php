<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
class AccessCtrl extends Controller
{
    //

     public function getToken(Request $request)
     {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'is_actived'=>1])) {
            // Authentication passed...

            $data=Auth::user();
            $data['token']=Auth::user()->api_token;
            return array(
                'code'=>env('API_CODE_SUCCESS'),
                'data'=>$data,
                'message'=>'success'
            );
        }
        else{

            return array(
                'code'=>env('API_CODE_ERR'),
                'data'=>null,
                'message'=>'account not active'
            );
            
        }

    }


    public function register(Request $request)
    {

        $validator = Validator::make($request->all(),[ 
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'city_id'=>'required|numeric',
            'username' => 'required|without_spaces|Regex:/\A(?!.*[:;]-\))[ -~]{3,20}\z/'
       ]);


        if ($validator->fails()) {
             return array(
               'code'=>env('API_CODE_ERR'),
               'data'=>$validator->messages(),
               'message'=>'error validation data request',

           );
         }


         $user=User::create([
         	'name'=>$request->name,
         	'email'=>$request->email,
         	'password'=>bcrypt($request->password),
         	'city_id'=>$request->city_id,
         	'username'=>$request->username,
         	'is_actived'=>0,
         	'group_id'=>1
         ]);

         $user=User::where('id',$user->id)->with('FromCity')->first();
         
         if($user){
         	 return array(
               'code'=>env('API_CODE_SUCCESS'),
               'data'=>$user,
               'message'=>'register success',

           );

         }else{

         	 return array(
               'code'=>env('API_CODE_ERR'),
               'data'=>null,
               'message'=>'can not register',

           );

         }
        
    }


    


}
