<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    public function store($id)
    {
        \Auth::user()->follow($id);
        return redirect('/');
    }

    public function destroy($id)
    {
        \Auth::user()->unfollow($id);
        return redirect('/');
    }
}
