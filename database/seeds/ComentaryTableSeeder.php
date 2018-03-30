<?php

use Illuminate\Database\Seeder;

class ComentaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Comentary::class, 200)->create();
    }
}
