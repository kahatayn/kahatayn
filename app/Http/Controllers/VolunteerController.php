<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\volunteer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //show register/create form
    public function create()
    {
        if (Auth::user()) {
            return view('index');
        }
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
        //
    }
    //logout 

    public function logout(Request $request)
    {

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
        // ->with('message','You have been logged out!');


    }

    public function login()
    {
        if (Auth::user()) {
            return view('index');
        }
        return view('volunteers.login');
    }



    public function authenticate(Request $request)
    {
        $formFields =  $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/profile');
        }
        return back()->withErrors(
            [
                'email' => 'Invalid Credentials'
            ]
        )->onlyInput('email');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(volunteer $volunteer)
    {
        //
    }

    public function profile()
    {
        $user = Auth::user();
        $events = $user->events;
        return view('profile', ["user" => $user, "events" => $events]);
    }

    public function eventDescription($id)
    {
        $event = Event::find($id);

        return view('eventDescription', ["event" => $event]);
    }
}