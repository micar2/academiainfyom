<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');//se puede meter slq

        $this->call(UserTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(ComentaryTableSeeder::class);
        $this->call(DocumentTableSeeder::class);
        $this->call(EnrolmentTableSeeder::class);


        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
