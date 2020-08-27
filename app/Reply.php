<?php

namespace App;

use App\User;
use App\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];

    protected $appends = ['userHasFavorited'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class)
            ->with('user');
    }

    public function usersFavorited()
    {
        return $this->morphToMany(User::class, 'favoritable');
    }

    public function favorite()
    {
        if ($this->userHasFavorited) {
            return response()->json(false);
        }

        $this->usersFavorited()->save(Auth::user());
    }

    public function unfavorite()
    {
        $this->usersFavorited()->detach(Auth::user());
    }

    public function getUserHasFavoritedAttribute()
    {
        return $this->usersFavorited->contains(Auth::user());
    }
}
