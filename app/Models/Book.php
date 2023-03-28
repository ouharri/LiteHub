<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Book extends Model
{

    protected $guarded = [];
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class,'category_id');
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function Author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    PUBLIC function comments(): HasMany
    {
        return $this->hasMany(Comment::class,'post_id');
    }

}
