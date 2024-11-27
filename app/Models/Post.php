<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Relasi Many-to-One dengan Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
