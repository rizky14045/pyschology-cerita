<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psychology extends Model
{
    use HasFactory;

    protected $table = 'psychologies';

    protected $fillable =[
        'name',
        'biography',
        'code',
        'number_license',
        'psychology_image',
        'personal_character',
        'education',
        'motto',
        'experience',
        'topics'
    ];
}
