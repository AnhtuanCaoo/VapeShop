<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =User::latest()->paginate(5);
        return view('userLayouts.app',compact('users'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
  
    /**
     * Store a newly created resource in storage.
     *
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('userLayouts.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */

    /**
     * Update the specified resource in storage.
     *
     */
    
    /**
     * Remove the specified resource from storage.
     *
     *=
     */
    
}
