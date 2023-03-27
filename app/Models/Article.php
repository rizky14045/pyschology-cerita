<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'articles';
    protected $fillable =[
        'title',
        'user_id',
        'slug',
        'banner_image',
        'description',
        'body'
    ];
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function creator()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
