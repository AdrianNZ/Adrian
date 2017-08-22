<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUsers(Request $request)
    {
        $user = Auth::user()->id;
        $idx = User::where('id', '=', $user)
            ->with(['friends' => function ($q) {
                $q->select('user_friends.user_id');
            }])->first();
        $ids = [];

        foreach ($idx->friends as $val) {
            $ids[] = $val->pivot->friend_id;
        }

        array_push($ids, $user);

        return response()
            ->json(['success' => '1', 'data' => User::whereNotIn('id', $ids)
                ->get()]);
    }

    public function getFriends()
    {
        $user = Auth::user()->id;
        return response()
            ->json(['success' => '1', 'data' => User::find($user)->friends()
                ->where('user_id', $user)->get()]);
    }

    public function setFriend(Request $request)
    {
        $user = Auth::user();
        $friendId = $request->friend;
        if (!$user->friends->contains($friendId)) {
            $user->friends()->attach($friendId);
        } else {
            $user->friends()->detach($friendId);
        }
    }
}
