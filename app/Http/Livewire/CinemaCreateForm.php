<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CinemaCreateForm extends Component
{
    use WithFileUploads;

    public $name, $address ,$description ,$image;
    public  $avaible_movies= [] ;
    public function store(){
        $cinema= Auth::user();
        
        if ($this->image) {
        
        $mycinema = $cinema->cinemas()->create([
            'name'=>$this->name,
            'address'=>$this->address,
            'image'=>$this->image->store('public/images'),
            'description'=>$this->description,
        ]);

        $mycinema->movies()->attach($this->avaible_movies);
        
        // public function __construct($newName, $newAddress, $newImage, $newDescription)
        // {
            // $this->name = $newName;
            // $this->address = $newAddress;
            // $this->image = $newImage;
            // $this->description = $newDescription;
        // }
        // new Cinema($name, $address, $image, $description);

        } else {

            $mycinema = cinema->cinemas()->create([
                'name'=>$this->name,
                'address'=>$this->address,
                'description'=>$this->description,
            ]);

            $mycinema->movies()->attach($this->avaible_movies);

        }

        session()->flash('cinemaCreated','Hai creato il tuo cinema');
        $this->reset();
        return redirect(route('cinema.index'));
    }

    public function render()
    {
        $movies=Movie::all();
        return view('livewire.cinema-create-form', compact('movies'));
    }
}
