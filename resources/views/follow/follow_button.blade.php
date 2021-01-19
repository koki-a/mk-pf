<div class="movies_follow">

    @if(Auth::check())
    
        @if(Auth::id() != $user->id)
    
            @if (Auth::user()->is_following($user->id))
            
                    {!! Form::open(['route' => ['unfollow', $user->id], 'method' => 'delete']) !!}
                        {!! Form::submit('フォロー解除', ['class' => "unfollow_btn"]) !!}
                    {!! Form::close() !!}
                
                @else
            
                    {!! Form::open(['route' => ['follow', $user->id]]) !!}
                        {!! Form::submit('フォローする', ['class' => "follow_btn"]) !!}
                    {!! Form::close() !!}
                
            @endif
        @endif
    @endif
</div>
