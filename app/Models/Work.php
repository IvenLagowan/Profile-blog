<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Work extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['title', 'slug', 'body'];
    protected $guarded = ['id'];

    // buat gambar
    public function work()
    {
        return $this->belongsTo(Work::class);
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
