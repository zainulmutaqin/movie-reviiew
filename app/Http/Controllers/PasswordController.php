<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PasswordController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit()
    {
        return view('password.edit');
    }
    public function update(UpdatePasswordRequest $request)
    {
        $request->user()->update([
            'password' => Hash::make($request->get('password'))
        ]);

        return redirect()->route('user.password.edit');
    }
}
