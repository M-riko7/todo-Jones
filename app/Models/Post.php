<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PostController;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'user_id',
        'post_id',
        'img_at',
    ];
    
}
