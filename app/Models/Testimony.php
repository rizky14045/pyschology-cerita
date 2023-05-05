<?php

namespace App\Models;

use App\Models\Psychology;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimony extends Model
{
    use HasFactory;
    protected $table ='testimonies';
    protected $fillable = [
        'client_name',
        'client_image',
        'description',
        'psychology_id'
    ];

    public function psychology()
    {
        return $this->hasOne(Psychology::class, 'id', 'psychology_id');
    }
}
