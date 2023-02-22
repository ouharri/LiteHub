<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
>>>>>>> origin/main

class React extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
=======
>>>>>>> origin/main
}
