<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\nidlist;
class UserverificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        nidlist::Create([
            'nidnumber'=>bcrypt('5432143435'),
            'name'=>'Remi',
            'fname'=>'Mr.remi',
            'mname'=>'mrs.remi',
            'cell'=>'5643',
            'email'=>'Remiii@gmail.com',
            'birthdate'=>'2000-10-20',
            'address'=>'uttara'

            
        ]); 
    }
}
