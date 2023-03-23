<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];


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
}
