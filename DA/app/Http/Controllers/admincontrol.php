<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Exception;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use function Sodium\compare;


class admincontrol extends Controller
{
    //login 
    public function ScreenAdminLogin(){
        return view('admin.login.login');
    }  

    public function AdminLogin(Request $request)
    { 
        try {
            $this->validateLogin($request);
            $credentials = request(['username', 'password']);
            $user = User::where([
                ['username', $request->username],
                ['is_deleted', false]])
                ->first();
            if (!Auth::attempt($credentials) || !$user) {
                $message = Lang::get('message.wrong_email_password');
                return redirect(route('screen_admin_login'))->with('message', $message);
            }
            $user->createToken('authToken')->plainTextToken;
            return redirect(route('screen_admin_home'));
        } catch (Exception $e) {
            return back()->with('message', $e->getMessage());
        }
    }

    //forgot password
    public function screen_forgot_admin(){
        return view('admin.login.forgot_pass');
    }

    //request screen home
    public function dashboard(){
        return view('admin.dashboard');
    }
    
}
