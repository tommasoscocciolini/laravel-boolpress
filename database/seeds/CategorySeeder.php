<?php

use Illuminate\Database\Seeder;
use App\Category;
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
        $categories = ['Arte' , 'Cucina' , 'Moda' , 'Musica' , 'Cultura' , 'Scuola'];

        foreach ($categories as $category) {
          $category_ob = new Category();
          $category_ob->name = $category;
          $category_ob->slug = Str::slug($category, '-');

          $category_ob->save();
        }
    }
}
