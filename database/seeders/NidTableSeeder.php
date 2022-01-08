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
            'name'=>'mowrin',
            'fname'=>'renu',
            'mname'=>'mina',
            'cell'=>'36987',
            'email'=>'mowrin36@gmail.com',
            'birthdate'=>'1999/02/02',
            'address'=>'kaliyartek',
           
            
        ]);
    }
}
//'nidnumber','name','fname','mname','cell','email','birthdate','address'