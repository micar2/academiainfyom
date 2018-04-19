<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'Admin']);

        $writerRole = Role::create(['name' => 'Writer']);

        factory(User::class)->create([
            'name' => 'Micar',
            'email' => 'munar2@hotmail.com',
        ])->assignRole($adminRole);


        factory(User::class, 10)->create()->each->assignRole($writerRole);

        factory(User::class, 30)->create();
    }
}
