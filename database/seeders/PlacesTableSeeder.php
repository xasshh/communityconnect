<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;

class PlacesTableSeeder extends Seeder
{
    public function run()
    {
        Place::create([
            'name' => 'Local Park',
            'type' => 'Park',
            'description' => 'A beautiful park with lots of greenery and space for activities.',
        ]);

        Place::create([
            'name' => 'Community Library',
            'type' => 'Library',
            'description' => 'A public library offering a wide range of books and resources.',
        ]);

        // Add more places as needed
    }
}
