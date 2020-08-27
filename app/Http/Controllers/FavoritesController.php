<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritesController extends Controller
{
    public function store(Reply $reply)
    {
        $reply->favorite();

        $reply->increment('favorites');

        return response()->json(true);
    }

    public function destroy(Reply $reply)
    {
        $reply->unfavorite();

        $reply->decrement('favorites');

        return response()->json(true);
    }
}
