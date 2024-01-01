<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'mainText',
        'secondText',
        'photo1',
        'photo2',
        'photo3',
        'photo4',
        'photo5',
        'format',
        'user',
        'category',
    ];
}
