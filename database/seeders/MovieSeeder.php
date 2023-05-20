<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies=
    [
        [ "Fast X" ,"action","Brum brum ratattaata.","/media/fastcover.jpg",'/media/fastposter.jpg'],
        [ "Matrix" ,"action","Solo ratattatatatatta, e anche un po' di bum bum.","/media/matrixcover.jpg",'/media/matrixposter.jpg'],
        [ "John Wick" ,"action","Come Matrix, ma senza cyberpunk.","/media/wickcover.jpg",'/media/wickposter.jpg'],
        [ "The dark knight" ,"Cinecomic","Sono Batman.","/media/batmancover.jpg",'/media/batmanposter.jpg'],
        [ "Spiderm-man" ,"Cinecomic","Quello bello (di Sam Raimi).","/media/spiedercover.jpg",'/media/spiederposter.jpg'],
        [ "Justice League" ,"Cinecomic","Quello brutto (di Josh Weadon).","/media/justicecover.jpg",'/media/justiceposter.jpg'],
        [ "Iron Man" ,"Cinecomic","Sono Iron man.","/media/ironcover.jpg",'/media/ironposter.jpg'],
        [ "American Pie" ,"comedy","Non ha bisogno di presentazioni.","/media/piecover.jpg",'/media/pieposter.jpg'],
        [ "American Pie: Band Camp" ,"comedy","Il campo della banda :D.","/media/bandcover.jpg",'/media/bandposter.jpg'],
        [ "American Pie" ,"comedy","I nostri eroi ritornano per un'ultima volta.","/media/matricover.jpg",'/media/matriposter.jpg'],
        
    ];

    foreach($movies as $movie){
        DB::table('movies')->insert([
            'title'=>$movie[0],
            'genre'=>$movie[1],
            'description'=>$movie[2],
            'cover'=>$movie[3],
            'poster'=>$movie[4],

        ]);
    }

    }
}
