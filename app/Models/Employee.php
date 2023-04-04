<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    // many تسمية الدالة جمع عشان
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

}
