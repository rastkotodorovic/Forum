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

        if (request('top')) {
            $builder->getQuery()->orders = [];

            return $builder->orderBy('reply_count', 'desc');
        }

        if (request('unanswered')) {
            return $builder->where('replies', 0);
        }
    }
}