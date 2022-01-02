<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\nidlist;
class NidTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user nid verification seeder
        nidlist::create([
            'nidnumber'=>bcrypt('369874125'),
            
        ]);
    }
}
//'nidnumber','name','fname','mname','cell','email','birthdate','address'