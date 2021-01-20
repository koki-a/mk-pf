@extends('layouts.app')

@section('content')
@include('commons.top')

<div class="auth_user inner">
    @if(Auth::check())
        <p>ログイン中のユーザー：<span class="auth_user_name">{{ Auth::user()->name }}</span>さん</p>
    @endif
</div>
@include('users.users')
@endsection