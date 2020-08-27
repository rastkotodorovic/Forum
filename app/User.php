<?php

namespace App;

use App\Reply;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'favorited',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }

    public function setAvatarAttribute($value)
    {
        $this->attributes['avatar'] = Storage::disk('public')->put('avatars', $value);
    }

    public function favoriteThreads()
    {
        return $this->morphedByMany(Thread::class, 'favoritable');
    }

    public function favoriteReplies()
    {
        return $this->morphedByMany(Reply::class, 'favoritable');
    }
}
