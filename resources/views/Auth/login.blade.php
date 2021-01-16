@extends('layouts.app')
@section('content')
<div class="form">
    <div class="form_inner inner">
        <div class="form_title">
            <h2>ログイン</h2>
        </div>
        <div class="form_items">
            {!! Form::open(['route' => 'login.post']) !!}

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
                        {!! Form::submit('ログイン', ['class' => 'form_btn']) !!}
                </div>
            {!! Form::close() !!}
        </div>

    </div>
</div>
@endsection
