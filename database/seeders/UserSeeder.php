<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Horacio Lazo',
            'email' => 'horaciolazo@gmail.com',
            'password' => bcrypt('sadelazo86')
          ]);
          User::factory(5)->create();
    }
}
