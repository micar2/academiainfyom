<?php

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categories::class)->create([
            'name' => 'Category Parent',
            'category_id'=> 1,
            'route' => 'start',
        ]);


        factory(Categories::class, 10)->create();
    }
}
