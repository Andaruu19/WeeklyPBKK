<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web Design',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Jaringan Komputer',
            'slug' => 'Jaringan Komputer',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Deep Learning',
            'slug' => 'Deep Learning',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'Machine Learning',
            'color' => 'yellow'
        ]);
    }
}
