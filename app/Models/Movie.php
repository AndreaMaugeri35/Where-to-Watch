<?php

namespace App\Models;

use App\Models\Cinema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Movie extends Model
{
    use HasFactory;

    protected $fillable=[

        'title',
        'genre',
        'description',
        'cover',    
        'poster',   

    ];

    public function cinemas()
    {
       return $this->belongsToMany(Cinema::class); 
    }
}
