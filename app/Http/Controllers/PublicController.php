<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Movie;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PublicController extends Controller
{


    public function homepage(){
        $c = false;
        $movies= Movie::all();
        return view('welcome', compact('c', 'movies'));
    }

    public function homepage1(){
        
        $c = true;
        $movies= Movie::all();
        return view('welcome', compact('c', 'movies'));

    }

    public function show(Movie $movie)
    {
        return view('movieShow',compact('movie'));
    }

    public function contact_us(Request $request){

        $mail = $request->mail;
        
        try{
        
            Mail::to($mail)->send(new ContactMail($mail));
            
        } catch(Exception $error){
            
            return redirect()->back()->with('emailError', "OOOPS! I server sono andati. Ritenta! Sarai più fortunato :)");
            
        }
        
        return redirect(route('homepage1'))->with('emailSent', 'Email ricevuta, ti ricontatteremo a breve!');
    

    }
}

