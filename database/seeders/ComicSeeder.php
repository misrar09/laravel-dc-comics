<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_cards = config('cards');
        foreach ($array_cards as $card) {
            $new_comic = new Comic();
            $new_comic->thumb = $card['thumb'];
            $new_comic->price = $card['price'];
            $new_comic->series = $card['series'];
            $new_comic->type = $card['type'];

            $new_comic->save();
        }
    }
}
