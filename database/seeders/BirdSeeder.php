<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bird;

class BirdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $birds = [

            ['name' => 'Raven'],

            ['name' => 'Sparrow'],

            ['name' => 'Falcon'],

            ['name' => 'Parrot'],

            ['name' => 'Owl'],

            ['name' => 'Eagle'],

            ['name' => 'Hawk'],

            ['name' => 'Dove'],

            ['name' => 'Pigeon'],

            ['name' => 'Robin'],

            ['name' => 'Blue Jay'],

            ['name' => 'Cardinal'],

            ['name' => 'Finch'],

            ['name' => 'Sparrowhawk'],

            ['name' => 'Peacock'],

            ['name' => 'Turkey'],

            ['name' => 'Quail'],

            ['name' => 'Hummingbird'],

            ['name' => 'Woodpecker'],

            ['name' => 'Kingfisher'],

            ['name' => 'Swallow'],

        ];
    }
}
