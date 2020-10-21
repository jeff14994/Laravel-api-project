<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Tell laravel what is in the database
    protected $fillable = [
        'title',
        'slug',
        'likes',
        'contents'
    ];
}
