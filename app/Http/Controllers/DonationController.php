<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function index() {
        $Donations = Donation::all();
        $data = [
            'name' => 'Donation',
            'Donation' => $Donations
        ];
        return view('Donat.layout', $data);
=======
    public function index()
    {
        //
>>>>>>> c53e042863812bee9e4eeb422bbdb167a6f92db8
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

<<<<<<< HEAD
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     return view ('donate');
    }

     /**
=======
    /**
>>>>>>> c53e042863812bee9e4eeb422bbdb167a6f92db8
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $formfiled=  $request->validate(
            [
                'name'=>['required','min:3'],
                'email'=>['required','email'],
                'amount'=>['required','numeric','min:1']
            ]
            );
            Donation :: create($formfiled);
            return redirect('/');

=======
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
>>>>>>> c53e042863812bee9e4eeb422bbdb167a6f92db8
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
