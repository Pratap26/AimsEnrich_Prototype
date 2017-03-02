<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;
use Exception;

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'city' => 'required|max:255',
            'phone_number' => 'required|min:6|max:12',
            'account_type' =>'required|max:255',
        

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'city' =>$data['city'],
            'phone_number'=>$data['phone_number'],
            'account_type'=>$data['account_type'],
        
        ]);
    }
 // public function redirectToGoogle()
 //    {
 //        return Socialite::driver('google')->redirect();
 //    }

 //    public function handleGoogleCallback()
 //    {
 //        try {
 //            $user = Socialite::driver('google')->user();
                
 //        } catch (Exception $e) {
 //            return redirect('auth\google');
 //        }

 //        $authuser=$this->createuser($user);
 //        Auth::login($authuser,true);
 //        return redirect()->route('home');
 //    }


 //   public function createuser($user)
 //   {

 //        $authuser=User::where('password' ,$user->id)->first();
 //        if($authuser)
 //        {
 //            return $authuser;
 //        }
 //        return User::create([
 //                'name'=>$user->name,
 //                'email'=>$user->email,
 //                'password'=>$user->id,
 //                'city'=>$user->name,
 //                'phone_number'=>$user->email,
 //                'account_type'=>"Student",

 //            ]);
 //    }


    // public function redirectToLinkedin()
    // {
    //     return Socialite::driver('linkedin')->redirect();
    // }

    // public function handleLinkedinCallback()
    // {
    //     try {
    //         $user = Socialite::driver('linkedin')->user();
    //         $create['name'] => $user->email;
    //         $create['email'] => $user->email;
    //         $create['password']=> $user->id;
    //         $create['city']=>$user->email;
    //         $create['phone_number']=>$user->email;
    //         $create['account_type']=>"Student";
            
    //         $userModel = new User;
    //         $createdUser = $userModel->addNew($create);
    //         Auth::loginUsingId($createdUser->id);
    //         return redirect()->route('home');
    //     } catch (Exception $e) {
    //         return redirect('auth/linkedin');
    //     }
    // }


   
}
