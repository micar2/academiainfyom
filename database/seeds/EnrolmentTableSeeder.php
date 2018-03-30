<?php

use Illuminate\Database\Seeder;

class EnrolmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(\App\Models\Enrolment::class, 400)->create();
    }
}
