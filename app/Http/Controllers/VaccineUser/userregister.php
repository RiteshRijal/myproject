<?php

namespace App\Http\Controllers\VaccineUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegistratioRequest;
use App\Models\UserRegistration;
use Illuminate\Http\Request;

class userregister extends Controller
{
    function create()
    {
        return view('vaccine_user.register');
    }

    function registration_process(UserRegistrationRequest $request)
    {
        if (UserRegistration::create($request->all())) {
            $request->session()->flash('success', 'User Registration successfully');
            return redirect()->route('vaccine_user.auth.login');

        } else {
            $request->session()->flash('error', 'User Registration failed failed');

            return redirect()->back();

        }}

    }

