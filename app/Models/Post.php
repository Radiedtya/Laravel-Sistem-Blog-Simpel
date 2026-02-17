<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    // Eloquent Relationship
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Query Scope
    public function scopeFilter(Builder $query, array $filters): void
    {
        // berdasarkan judul
        $query->when($filters['search'] ?? false, fn ($query, $search) => 
            $query->where('title', 'like', '%' . $search . '%')
        );

        // berdasarkan category
        $query->when($filters['category'] ?? false, fn ($query, $category) => 
            $query->whereHas('category', fn ($query) => 
                $query->where('slug', $category)
            )
        );

        // berdasarkan author
        $query->when($filters['author'] ?? false, fn ($query, $author) => 
            $query->whereHas('author', fn ($query) => 
                $query->where('username', $author)
            )
        );
    }
}
