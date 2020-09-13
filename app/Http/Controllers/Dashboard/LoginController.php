<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{
    public function login()
    {
        return view('dashboard.auth.login');
    }

    public function postLogin(AdminLoginRequest $request)
    {
        //return $request;

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me)) {
            //notify()->success('');
            return redirect()->route('admin.index');
        }
        // notify()->error('');
        return redirect()->back()->with(['error'=>' error in data ']);

    }
}
