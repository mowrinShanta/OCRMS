<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name'=>'remi',
            'password'=>bcrypt('54321'),
            'email'=>'Remi@gmail.com',
            'cell'=>'1234567'
            
        ]);
    }
}
