<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;
    public $table = 'posting';
    protected $fillable = ['pickup', 'dropoff', 'date', 'weight', 'price', 'broker'];
}
