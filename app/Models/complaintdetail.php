<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaintdetail extends Model
{
    use HasFactory;
    protected $fillable=['date','time','name','address','cell','email','complainttype','description','image'];
}
