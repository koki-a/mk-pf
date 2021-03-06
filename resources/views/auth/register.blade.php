@extends('layouts.app')

@section('content')
@include('commons.errors_msg')
<div class="form">
    <div class="form_inner inner">
        <div class="form_title">
            <h2>新規ユーザー登録</h2>
            <p>ユーザー登録をすると動画を投稿できるようになります。</p>
        </div>
        <div class="form_items">
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form_item">
                        {!! Form::label('name', 'ユーザー名') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form_control']) !!}
                </div>

                    <div class="form_item">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form_control']) !!}
                </div>

                <div class="form_item">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form_control']) !!}
                </div>

                <div class="form_item">
                        {!! Form::label('password_confirmation', 'パスワード確認') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form_control']) !!}
                </div>
                <div class="form_footer">
                        {!! Form::submit('新規登録', ['class' => 'form_btn']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
