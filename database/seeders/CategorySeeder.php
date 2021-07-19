<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Ovillos',
                'slug' => Str::slug('Ovillos'),
                'icon' => '<img src="https://img.icons8.com/cotton/40/000000/knitting-ball--v1.png"/>',
            ],

            [
                'name' => 'Accesorios',
                'slug' => Str::slug('Accesorios'),
                'icon' => '<img src="https://img.icons8.com/color/40/000000/knitting.png"/>',
            ],

            [
                'name' => 'Cursos y tutoriales',
                'slug' => Str::slug('Cursos y Tutoriales'),
                'icon' => '<img src="https://img.icons8.com/nolan/40/scarf.png"/>',
            ],
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();
            //Category::create($category);

            $brands = Brand::factory(4)->create();

        foreach ($brands as $brand);
            $brand->categories()->attach($category->id);
        }
    }
}
