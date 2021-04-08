<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footballcamp extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'destination', 'price', 'description', 'begin_date', 'end_date', 'available'
    ];
}
