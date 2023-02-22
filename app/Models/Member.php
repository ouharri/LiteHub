<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
=======
>>>>>>> origin/main

class Member extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
=======
>>>>>>> origin/main
}
