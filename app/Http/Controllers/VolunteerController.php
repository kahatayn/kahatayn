<?php

namespace App\Http\Controllers;

use App\Models\volunteer;
use Illuminate\Http\Request;
use auth;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    public function volunteers(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

       
    }

    public function login()
    {
       return view('auth.login');
    }
    
    public function authenticate(Request $request)
    {
       $formFields =  $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);
    if(auth()->attempt($formFields)){
        $request->session()->regenerate();

        return redirect('/');
    }
return back()->withErrors(
[
    'email'=> 'Invalid Credentials'
]
)->onlyInput('email');

    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
