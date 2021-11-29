<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaintlist extends Model
{
    use HasFactory;

    protected $table="complaintlists";
    protected $fillable=['complaintnumber','complainttype','complaintdetails','image'];


}
