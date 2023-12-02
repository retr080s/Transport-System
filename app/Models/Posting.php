<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;

    // this is added because laravel sometimes gets confused in which table to put data into 💀
    public $table = 'posting';
    
    protected $fillable = ['pickup', 'dropoff', 'date', 'weight', 'price', 'broker'];

    
}
