<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;


class News extends Model
{
    use HasFactory;
    use Sluggable;

    //  protected $fillable = ['title', 'excerpt', 'body'];

     protected $guarded = ['id'];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function news()
    // {
    //     return $this->belongsTo(News::class);

    // }

    // public function author()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function scopeFillter($query, array $fillters)
    {

        $query->when($fillters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%' )->orWhere('excerpt', 'like', '%' . $search . '%' );
        });

        $query->when($fillters['search'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

    }

}
