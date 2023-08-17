<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'postTitle',
        'postDes',
        'postStatus',
        'user_id',
        'postStatus',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
