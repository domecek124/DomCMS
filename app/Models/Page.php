<?php

namespace App\Models;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'slug', 'content'];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'page_post');
    }
}
