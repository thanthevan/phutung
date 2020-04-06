<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return view('vendor.adminlte.login');
    }
    public function login(LoginRequest $request)
    {
      try {
        $data = [
         'email' => $request->email,
         'password' => $request->password
       ];
        if (Auth::attempt($data, $request->remember)) {

           return redirect(route('dashboard'));
        }
        else
           return Redirect::back()->withErrors(['login_error'=>'Sai tài khoản hoặc mật khẩu']);

      } catch (\Exception $e) {

      //  return Redirect::route('admin-get-login');

      }
    }

    public function logout()
    {
      Auth::logout();
      return redirect(route('dashboard'));
    }
}
