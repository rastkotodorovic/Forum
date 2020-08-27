<?php

namespace App\Traits;

use Illuminate\Support\Facades\Redis;

trait RedisTrait {

    public function recordVisit()
    {
        Redis::incr($this->redisRoute());

        return $this;
    }

    public function visits()
    {
        return Redis::get($this->redisRoute()) ?? 0;
    }

    public function redisRoute()
    {
        return "thread.{$this->id}.visit";
    }
}

