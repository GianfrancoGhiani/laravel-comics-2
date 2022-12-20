<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comics = config('comics.comics');
  
        foreach($comics as $comic){
            $newcomic = new Comic();
            $newcomic->title = $comic['title']; 
            $newcomic->price = $comic['price'];
            $newcomic->series = $comic['series'];
            $newcomic->thumb = $comic['thumb'];
            $newcomic->description = $comic['description'];
            $newcomic->type = $comic['type'];
            $newcomic->sale_date = $comic['sale_date'];
            $artists = '';
            $writers = '';
            foreach($comic['artists'] as $artist){
                $artists .= "$artist, ";
            }
            foreach($comic['writers'] as $writer){
                $writers .= "$writer, ";
            }
            $newcomic->artists = $artists;
            $newcomic->writers = $writers;
            $newcomic->save();
        }
    }
}
