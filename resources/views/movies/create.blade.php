@extends('layouts.app')



@section('content')
@include('commons.errors_msg')
<div class="form">
    <div class="form_inner inner">
        <div class="form_title">
            <h2>動画を投稿する</h2>
        </div>
        <div class="form_items">
            {!! Form::open(['route' => 'movies.store']) !!}
            <div class="form_item">
                {!! Form::label('url', '動画のURL') !!} 
                {!! Form::text('url',null, ['class' => 'form_control']) !!}
            </div>
            <div class="form_explain">
                <p>例）登録したいYouTube動画のURLが "<span class="movie_url">https://www.youtube.com/watch?v=EDCKT2f5Kq0</span>"であれば
                <p>"v="の直後にある "<span class="movie_url">EDCKT2f5Kq0</span>" を入力</p>
            </div>
            <div class="form_item">
                {!! Form::label('comment','動画へのコメント') !!}
                {!! Form::text('comment',null,['class' => 'form_control']) !!}
            </div>
            <div class="form_footer">
                {!! Form::submit('投稿する', ['class' => 'form_btn']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
    
    @include('movies.movies', ['movies' => $movies])


</div>
@endsection