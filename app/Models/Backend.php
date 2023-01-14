<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backend extends Model
{
    protected $fillable = [
        'name',
        'color',
        'type',
        'email',
        'age'
    ];

    use HasFactory;
}