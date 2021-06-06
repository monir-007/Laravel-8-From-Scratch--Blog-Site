<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($qb, $search){
                $qb
                    ->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
        });
        $query->when($filters['category'] ?? false, function ($qb, $category){
            $qb->whereHas('category', fn($query)=>
                $query->where('slug', $category));
        });

    }

    public function  category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function  author():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
