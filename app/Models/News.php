<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'subtitle', 'body', 'image', 'published','publication_date'];

    // App\Models\News.php
    public function images() {
    return $this->hasMany(Image::class);
}    

}
