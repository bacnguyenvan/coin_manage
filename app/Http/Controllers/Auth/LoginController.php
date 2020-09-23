<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;
use Auth;
use Exception;
use App\Models\Account;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    //google 
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
   
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = Account::where('google_id', $user->id)->first();
            if($finduser){

                Auth::guard('admin')->login($finduser);
                return redirect('/coin');
            }else{

                $newUser = Account::create([
                    
                    'email' => $user->email,
                    'google_id'=> $user->id
                ]);
                  Auth::guard('admin')->login($newUser);
                 return redirect()->route('coins-list');
            }
        } catch (Exception $e) {
            return redirect('auth/google');
        }
    }

    //facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            // dd($user);
            $finduser = Account::where('facebook_id',$user->id)->first();
            if(!empty($finduser)){
                Auth::guard('admin')->login($finduser);
                return redirect('/coin');
   
            }else{
                $newUser = Account::create([
                    'name' => $user->name,
                    'facebook_id'=> $user->id,
                    'image' => $user->avatar,
                ]);
                Auth::guard('admin')->login($newUser);
                return redirect()->route('coins-list');
            }
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }
    }

}
