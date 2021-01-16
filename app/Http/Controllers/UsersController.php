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
    

}