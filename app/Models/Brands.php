<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    public $timestamps=false;
    use HasFactory;

    protected $fillable=[
        'name',
        'country',
    ];
}
