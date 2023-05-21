<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CinemaFormEdit extends Component
{
    use WithFileUploads;

    public $cinema;

    public $name, $address, $description, $image;

    public $old_image;
    public $avaible_movies=[];

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
    }

    public function update(){
        $this->cinema->update([
            'name' =>$this->name,
            'address' =>$this->address,
            'description' =>$this->description,
        ]);
        
        if($this->image){
            $this->cinema->update([
                'image' => $this->image->store('public/images')
            ]);

            Storage::delete($this->old_image);
            $this-> old_image = $this -> cinema -> image;
            $this-> reset('image');
        }


        $this->cinema->movies()->sync($this->avaible_movies);
        session()->flash('cinemaUpdated', 'Hai aggiornato la sala');
        return redirect(route('cinema.index'));
    }

    public function mount(){
        $this->name = $this->cinema->name;
        $this->address = $this->cinema->address;
        $this->old_image = $this->cinema->image;
        $this->description = $this->cinema->description;
        $this->avaible_movies = $this->cinema->movies->pluck('id');
    }

    public function destroy(){
        $this->cinema->movies()->detach();
        Storage::delete($this->old_image);
        $this->cinema->delete();
        $this->cinema->delete();
        session()->flash('cinemaDeleted', 'Eliminato');
        return redirect(route('cinema.index'));
    }

    public function render()
    {   
        $movies=Movie::all();
        return view('livewire.cinema-form-edit',compact('movies'));
    }
}
