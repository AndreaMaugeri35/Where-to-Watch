<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Cinema;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cinemas = Cinema::all();
        return view('cinema.index', compact('cinemas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cinema.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(Cinema $cinema)
    {
        return view('cinema.show',compact('cinema'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cinema $cinema)
    {
        return view('cinema.edit', compact('cinema'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cinema $cinema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $cinemas = Cinema::all();
        
        foreach ($cinemas as $cinema) {

            $cinema->delete();


        }

        // $cinemas = Cinema::all();
        return redirect(route('cinema.index'));

    }
}
