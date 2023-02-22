<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> origin/main

class Book extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
=======
>>>>>>> origin/main
}
