<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chief;
use Illuminate\Support\Facades\DB;

class ChiefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chief::create([
            'avatar' => '6.jpg',
            'name' => 'Esther Howard',
            'roll' => 'Chef cook - Founder',
            'facebook' => 'https://www.facebook.com/esther',
            'twitter' => 'twitter.com/kristin',
            'pinterest' => 'www.pinterest.com/kristin',
            'instagram' => 'https://www.instagram.com/krisin'
        ]);
        Chief::create([
            'avatar' => '3.jpg',
            'name' => 'Kristin Watson',
            'roll' => 'Chef Cook',
            'facebook' => 'https://www.facebook.com/kristin',
            'twitter' => 'twitter.com/kristin',
            'pinterest' => 'www.pinterest.com/kristin',
            'instagram' => 'https://www.instagram.com/krisin'
        ]);
        Chief::create([
            'avatar' => '5.jpg',
            'name' => 'Darrell Steward',
            'roll' => 'Chef Cook',
            'facebook' => 'https://www.facebook.com/darrell',
            'twitter' => 'twitter.com/darrell',
            'pinterest' => 'www.pinterest.com/darrell',
            'instagram' => 'https://www.instagram.com/darrell'
        ]);
    }
}
