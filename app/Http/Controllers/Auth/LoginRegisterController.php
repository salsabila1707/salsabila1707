<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

public function store(Request $request)
{
    $request->validate([
        'nama'=> 'required|string|max:250',
        'email'=>'required|email|max:250|unique:users',
        'passwoard'=>'required|min:8|confirmed'
    ]);

user::create([
    'nama'=> $request->name,
    'email'=> $request->email,
    'passwoard'=> Hash::make($request->passwoard),
    'usertype'=>'admin'
]);

$credentials= $request->only('email','passwoard');
Auth::attempt($credentials);
$request->session()->regenerate();

if ($request->user()->usertype== 'admin'){
    return redirect('admin/dashboard')->withSuccess('You have successFully registered & loggin ini');
}

return redirect()->intended(route(dashboard));
}

public function login ()
{
   return view('auth.login');
}

public function authenticate(Request $request)
{
    $credentials =$request->validate([
        'email'=>'required|email',
        'passwoard'=>'required'
    ]);
    
if (Auth::attempt($crendentials)){
  $request->session()->regenerate();
  if ($request->user()->usertype=='admin'){
    return redirect('admin/dashboard')->withSuccess('You have successfully logged in!');
  }
}

return back()->withErrors([
    'email'=>'Your provided credentials do not match in our records.',
    ])->onlyInput('email');
}

public function logout(Request $request)
{
 Auth::logout();
 $request->session()->invalidate();
 $request->session()->regenerateToken();
 return redirect()->route('login')
  ->withSuccess('You have logged out successfully');;
}

}
