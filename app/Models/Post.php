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
