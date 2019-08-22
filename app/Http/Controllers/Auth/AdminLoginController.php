<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Requests\AdminLogin;

class AdminLoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.adminLogin');
    }

    public function login(AdminLogin $request)
    {
        $user = $request->only([
            'email',
            'password',
        ]);

        if(Auth::guard('admin')->attempt($user, $request->filled('remember'))){
            //Authentication passed...
            return redirect()
                ->intended(route('admin.home'))
                ->withMessage('You are Logged in as Admin!');
        }
        //Authentication failed...
        return $this->loginFailed();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()
            ->route('home')
            ->with('status','Admin has been logged out!');
    }

    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }
}
