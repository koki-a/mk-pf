<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Movie;

class MoviesController extends Controller
{

    //データを作成

    public function create()
    {
        $user = \Auth::user();
        $movies = $user->movies()->orderBy('id','desc')->paginate(6);

        $data=[
            'user' => $user,
            'movies' => $movies,
        ];

        return view('movies.create', $data);

    }

    //データを登録

    public function store(Request $request)
    {

        $this->validate($request,[
            'url' => 'required|max:11',
            'comment' => 'max:36',
        ]);

        $request->user()->movies()->create([
            'url' => $request->url,
            'comment' => $request->comment,
        ]);

        return redirect('/');
    }

    //データを削除

    public function destroy($id) {
        $movie = Movie::find($id);

        if (\Auth::id() == $movie->user_id){
            $movie->delete();
        }

        return redirect('/');
    }
}
