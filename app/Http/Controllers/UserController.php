<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function profile(){

        return view('user.profile');

    }
    public function destroy()
    {
        $cinemas = Auth::user()->cinemas;
        
        foreach ($cinemas as $cinema) {

            $cinema->delete();


        }

        return redirect(route('user.profile'));

    }
}
