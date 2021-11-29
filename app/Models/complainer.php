<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complainer extends Model
{
    use HasFactory;

    protected $fillable=['issue_date','issue_time','complainer_name','complainer_address','complainer_phone','complainer_email','complainer_type','place_photo'];
}
