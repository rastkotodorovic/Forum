<?php

namespace App;

use App\Category;
use App\Filter\ThreadFilter;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
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
        $threads = Thread::withCount('reply')->latest();

         if ($category->exists) {
             $threads = $category->thread()->latest();
         }

         return $threads->filter($filters)->paginate(12);
    }
}
