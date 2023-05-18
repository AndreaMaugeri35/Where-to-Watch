<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CinemaFormEdit extends Component
{
    use WithFileUploads;

    public $name, $address, $description, $image;

    public $old_image;

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


        session()->flash('cinemaUpdated', 'Hai aggiornato la sala');
    }

    public function render()
    {
        return view('livewire.cinema-form-edit');
    }
}
