<?php

namespace App\Filter;

use App\User;
use App\Thread;

class ThreadFilter
{
    public function apply($builder)
    {
        if ($username = request('by')) {

            $user = User::where('name', $username)->first();

            return $builder->where('user_id', $user->id);
        }

        if (request('popular')) {

            $builder->getQuery()->orders = [];

            return $builder->orderBy('reply_count', 'desc');
        }
    }
}