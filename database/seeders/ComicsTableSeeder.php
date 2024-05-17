<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use App\Functions\Helper;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');
        foreach($comics as $comic){
            $new_comic=  new Comic();
            $new_comic->title = $comic['title'];
            $new_comic->slug = Helper::createSlug($new_comic->title, new Comic()) ;
            $new_comic->description =$comic['description'] ;
            $new_comic->thumb =$comic['thumb'] ;
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];

            // per passare gli array qui gli passo implode
            // implode unisce gli elementi dell'array con una stringa e un carattere che scegliamo noi. quindi doppio parametro : 1. carattere , 2. passo il mio array
            // è come il join di js

            $new_comic->artists = implode(',' ,$comic['artists']) ;
            $new_comic->writers =  implode(',' ,$comic['writers']) ;
            $new_comic-> save();
            // dump ($new_comic);
        }

    }




}

