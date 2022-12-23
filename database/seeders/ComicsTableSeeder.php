<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach ($comics as $comic) {
            $new_comic = new Comic();
            foreach ($comic as $key => $property) {
                //var_dump($key);
                //var_dump($comic[$key]);
                if ($key === 'price') {
                    $new_comic->$key = floatval($property);
                } else {
                    $new_comic->$key = $property;
                }
            }
            $new_comic->save();
        }
    }
}
