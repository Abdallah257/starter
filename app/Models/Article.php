<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'employee_id'
    ];

    // many تسمية الدالة جمع عشان
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    // belong to تسمية الدالة مفرد عشان
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    // many تسمية الدالة جمع عشان
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public static function getLatestArticles(){
        return self::query()
            ->where('status','=','approved')
            ->with(['employee:id,name,image','categories:id,name'])
            ->latest()
            ->take(3)
            ->get();
    }
}
