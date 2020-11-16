<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use App\Comment;

    protected $table = 'posts';

    /*protected $fillable=[
        'title',
        'content',
        'is_feature'
    ];*/


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
