<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //データの一覧を表示する

    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(6);
        
        return view('welcome', [
            'users' => $users,
        ]);
    }

    //自分の登録した動画一覧を表示する

    public function show($id)
    {
        $user = User::find($id);
        $movies = $user->movies()->orderBy('id', 'desc')->paginate(6);

        $data=[
            'user' => $user,
            'movies' => $movies,
        ];

        $data += $this->counts($user);

        return view('users.show',$data);
    }

    //編集する

    public function rename(Request $request){

        $this->validate($request,[
            'channel' => 'required|max:15',
            'name' => 'required|max:15'
        ]);

        $user = \Auth::user();
        $movies = $user->movies()->orderBy('id','desc')->paginate(6);

        $user->channel = $request->channel;
        $user->name = $request->name;
        $user->save();

        $data = [
            'user' => $user,
            'movies' => $movies,
        ];

        $data += $this->counts($user);
        
        return view('users.show',$data);
    }

    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(6);

        $data = [
            'user' => $user,
            'users' => $followings,
        ];

        $data += $this->counts($user);

        return view('users.followings', $data);
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(6);

        $data = [
            'user' => $user,
            'users' => $followers,
        ];

        $data += $this->counts($user);

        return view('users.followers', $data);
    }
    

}
