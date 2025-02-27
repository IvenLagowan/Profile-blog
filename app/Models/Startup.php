<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;



class Startup extends Model
{
    use HasFactory;
    use Sluggable;

     //  protected $fillable = ['title', 'excerpt', 'body'];

     protected $guarded = ['id'];

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
