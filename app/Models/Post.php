<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
=======
>>>>>>> origin/main

class Post extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(user::class);
    }

    public function book(): HasOne
    {
        return $this->hasOne(Book::class);
    }

    public function react(): HasMany
    {
        return $this->hasMany(React::class);
    }

    public function star(): HasMany
    {
        return $this->hasMany(Star::class);
    }
=======
>>>>>>> origin/main
}
