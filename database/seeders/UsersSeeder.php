<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();
        
            $user = User::factory()
            ->has(EtudiantsSeeder::factory()->count(1))
            ->create(100);


    }
}
