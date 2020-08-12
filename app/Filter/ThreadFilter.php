<?php

namespace App\Filter;

use App\User;

class ThreadFilter
{
    public function apply($builder)
    {
        if ($username = request('by')) {

            $user = User::where('name', $username)->first();

            return $builder->where('user_id', $user->id);
        }
    }
}