<?php

namespace App;

use App\Category;
use App\Traits\RedisTrait;
use App\Filter\ThreadFilter;
use Illuminate\Support\Facades\Redis;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use RedisTrait;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    public static function getThreads(Category $category, ThreadFilter $filters)
    {
        $threads = Thread::with('user', 'category')->withCount('reply')->latest();

         if ($category->exists) {
             $threads = $category->thread()->latest();
         }

         return $threads->filter($filters)->paginate(12);
    }

    public function usersFavorited()
    {
        return $this->morphToMany(User::class, 'favoritable');
    }
}


