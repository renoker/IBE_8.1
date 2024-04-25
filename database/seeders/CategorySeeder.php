<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category'  => 'Tolvas',
        ]);

        Category::create([
            'category'  => 'Transportadoras',
        ]);

        Category::create([
            'category'  => 'Volteadoras',
        ]);

        Category::create([
            'category'  => 'Extractoras',
        ]);

        Category::create([
            'category'  => 'Mesas',
        ]);

        Category::create([
            'category'  => 'Bombas',
        ]);

        Category::create([
            'category'  => 'Otros',
        ]);
    }
}
