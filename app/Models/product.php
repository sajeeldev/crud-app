<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;


    // $fillable attribute is manage that which feilds are to be considered when user insert or update data 


    protected $fillable = [
        'name',
        'qty',
        'price',
        'description'
    ];
}