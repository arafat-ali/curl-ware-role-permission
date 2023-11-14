<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterFormRequest;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{

    public function register(){
        return view('register');
    }

    public function postRegister(RegisterFormRequest $request):RedirectResponse{
        $data = $request->only(['firstName', 'lastName', 'email']);
        $employee = User::create([
            ...$data,
            'password' => bcrypt($request->password)
        ]);
        if($employee) {
            $employee->assignRole('employee');
            return redirect()->route('login')->with('message', 'Registration successful');
        }
        return back()->withInput();
    }


    public function login(){
        return view('login');
    }

    public function postLogin(LoginFormRequest $request) : RedirectResponse{
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if(!$user){
            return back()->withInput()->with('no_account_found', 'No account found with this email');
        }

        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            if($user->hasRole('admin'))
                return redirect()->intended('/admin');
            else if($user->hasRole('manager'))
                return redirect()->intended('/manager');
            else
                return redirect()->intended('/employee');
        }

        return back()->withInput()->with('password_mismatch', 'Credential not matched!');
    }

    public function logout(Request $request): RedirectResponse{
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }



}
