<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login_view()
    {
        $pageConfigs = ['bodyCustomClass' => 'login-bg', 'isCustomizer' => false];

        return view('/authentication/login', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function login_check(Request $request)
    {
       //Validate
       $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:5|max:12',
       ]);
       
       $userInfo = User::where('email','=',$request->email)->first();
       
       if(!$userInfo){
         return back()->with('error','We do not recognize your email address');
       }else{          
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('/home');
            }else{
                return back()->with('error','Incorrect password');
            }
       }
    }

    public function login_logout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
}
