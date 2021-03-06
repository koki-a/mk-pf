@extends('layouts.app')

@section('content')

@include('users.tabs',['user' => $user])

@include('movies.movies', ['movies' => $movies])

@if(Auth::id() == $user->id)


<div class="form">
        <div class="form_inner inner">
                <div class="form_title">
                        <h2>情報を変更する</h2>
                </div>
                <div class="form_items">

                        {!! Form::open(['route' => 'rename','method'=>'put']) !!}
                        <div class="form_item">
                                {!! Form::label('channel','チャンネル名') !!}
                                {!! Form::text('channel', $user->channel, ['class' => 'form_control']) !!}
                        </div>

                        <div class="form_item">
                                {!! Form::label('name','名前') !!}
                                {!! Form::text('name', $user->name, ['class' => 'form_control']) !!}
                        </div>
                        <div class="form_footer">
                                {!! Form::submit('更新する', ['class' => 'form_btn']) !!}
                        </div>
                        {!! Form::close() !!}

                </div>
        </div>
</div>

@endif


@endsection