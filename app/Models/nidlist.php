<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nidlist extends Model
{
    use HasFactory;
            
            protected $fillable=['nidnumber','name','fname','mname','cell','email','birthdate','address'];

}
