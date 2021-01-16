@extends('layouts.app')

@section('content')

<ul class="nav nav-tabs nav-justified mt-5 mb-2">
        <li class="nav-item nav-link"><a href="" class="">フォロワー<br><div class="badge badge-secondary"></div></a></li>
        <li class="nav-item nav-link"><a href="" class="">フォロー中<br><div class="badge badge-secondary"></div></a></li>
</ul>

@include('movies.movies', ['movies' => $movies])


@endsection

