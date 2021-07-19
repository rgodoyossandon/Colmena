<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [


            [
                // ** Ovillos

                'category_id' => 1,
                'name'=> 'Composición',
                'slug'=> Str::slug('Composición'),
                'color'=> true,
                'size'=>true,
            ],

            [
                'category_id' => 1,
                'name'=> 'Grosor',
                'slug'=> Str::slug('Grosor'),
                'color'=> true,
                'size'=>true,
            ],

            [
                'category_id' => 1,
                'name'=> 'Linea',
                'slug'=> Str::slug('Linea'),
                'color'=> true,
                'size'=>true,
            ],

            // ** Accesorios

            [
                'category_id' => 2,
                'name'=> 'Tejido',
                'slug'=> Str::slug('Tejido'),
                'color'=> false,
                'size'=>true,
            ],
            [
                'category_id' => 2,
                'name'=> 'Fieltro',
                'slug'=> Str::slug('Fieltro'),
                'color'=> false,
                'size'=>true,
            ],
            [
                'category_id' => 2,
                'name'=> 'Costura',
                'slug'=> Str::slug('Costura'),
                'color'=> false,
                'size'=>true,
            ],
            [
                'category_id' => 2,
                'name'=> 'Libros',
                'slug'=> Str::slug('Libros'),
                'color'=> false,
                'size'=>false,
            ],


            // ** Curso y Tutotriales

            [
                'category_id' => 3,
                'name'=> 'Curso',
                'slug'=> Str::slug('Curso'),
                'color'=> false,
                'size'=>true,
            ],
        ];
        foreach ($subcategories as $subcategory) {
            Subcategory::create($subcategory);
        };
    }
}
