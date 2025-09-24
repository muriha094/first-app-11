<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'slug', 'body'];

    // Eager loading otomatis agar tidak kena N+1 problem
    protected $with = ['author', 'category'];

    // Relasi ke User (Author)
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Scope untuk filtering posts berdasarkan search dan category.
     */
    public function scopeFilter(Builder $query, array $filters): void
    {
        // Filter search (judul atau body)
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                      ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        // Filter category (slug kategori)
        $query->when($filters['category'] ?? false, function ($query, $category) {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }
}
