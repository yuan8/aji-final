<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
use App\SettingAbout;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

   

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'city_id'=>'required|numeric',
            'username' => 'required|without_spaces|Regex:/\A(?!.*[:;]-\))[ -~]{3,20}\z/'
        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   

         $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'username'=>$data['username'],
            'role'=>1,
            'city_id'=>$data['city_id'],
            'group_id'=>1,
            'is_email_verified'=>1,
            'is_actived'=>1,
            'api_token'=>bcrypt(Carbon::now())
        ]);

         $token=bcrypt($user->id.(Carbon::now()));

         $stoken=User::find($user->id)->update([
            'api_token'=>$token
         ]);

         SettingAbout::create([
            'user_id'=>$user->id
         ]);

         return $user;


    }
}
