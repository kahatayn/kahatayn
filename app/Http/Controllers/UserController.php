<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('volunteers.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //create new user 
    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'password' => 'required|confirmed|min:6'
            ]
        );

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);


        //create user
        $user = User::create($formFields);

        // /auto log
        auth()->login($user);

        return redirect('/');
        // ->with
        //     ('message', 'User created and logged in');

    }
}
