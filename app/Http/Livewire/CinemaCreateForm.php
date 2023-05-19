<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CinemaCreateForm extends Component
{
    use WithFileUploads;

    public $name, $address ,$description ,$image ;

    public function store(){
        $cinema= Auth::user();
        
        if ($this->image) {
        
        $cinema->cinemas()->create([
            'name'=>$this->name,
            'address'=>$this->address,
            'image'=>$this->image->store('public/images'),
            'description'=>$this->description,
        ]);
        } else {

            $cinema->cinemas()->create([
                'name'=>$this->name,
                'address'=>$this->address,
                'description'=>$this->description,
            ]);

        }

        session()->flash('cinemaCreated','Hai creato il tuo cinema');
        $this->reset();
        return redirect(route('cinema.index'));
    }

    public function render()
    {
        return view('livewire.cinema-create-form');
    }
}
