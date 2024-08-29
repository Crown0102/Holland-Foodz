<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Zeot',
            'type' => 'candy',
        ]);

        Category::create([
            'name' => 'Cinnamon',
            'type' => 'candy',
        ]);

        Category::create([
            'name' => 'Mint',
            'type' => 'candy',
        ]);

        Category::create([
            'name' => 'Gemengd',
            'type' => 'candy',
        ]);

        Category::create([
            'name' => 'Snoeperig',
            'type' => 'candy',
        ]);

        Category::create([
            'name' => 'Samiak',
            'type' => 'candy',
        ]);

        Category::create([
            'name' => 'Pillows',
            'type' => 'candy',
        ]);

        Category::create([
            'name' => 'Sticks',
            'type' => 'candy',
        ]);

        Category::create([
            'name' => 'Chunks',
            'type' => 'candy',
        ]);

        Category::create([
            'name' => 'Klein Zakje',
            'type' => 'candy',
        ]);

        Category::create([
            'name' => 'Grote Zak',
            'type' => 'candy',
        ]);

        Category::create([
            'name' => 'Beker',
            'type' => 'candy',
        ]);
        
        Category::create([
            'name' => 'Chocolade',
            'type' => 'diary',
        ]);

        Category::create([
            'name' => 'Aardbei',
            'type' => 'diary',
        ]);

        Category::create([
            'name' => 'Vanille',
            'type' => 'diary',
        ]);

        Category::create([
            'name' => 'Kaas',
            'type' => 'diary',
        ]);

        Category::create([
            'name' => 'Karamel',
            'type' => 'diary',
        ]);

        Category::create([
            'name' => 'Vol',
            'type' => 'diary',
        ]);

        Category::create([
            'name' => 'Mager',
            'type' => 'diary',
        ]);

        Category::create([
            'name' => 'Laag vet',
            'type' => 'diary',
        ]);

        Category::create([
            'name' => 'Biologisch',
            'type' => 'diary',
        ]);
    }
}
