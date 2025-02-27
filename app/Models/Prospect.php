<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Category;


class Prospect extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['title', 'slug', 'body'];
    protected $guarded = ['id'];

    // buat gambar
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function prospect()
    {
        return $this->hasMany(Prospect::class);
    }

    public function startup()
    {
        return $this->hasMany(Startup::class);
    }

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
}
