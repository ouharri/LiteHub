<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Book extends Model
{

    protected $guarded = [];
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

}
