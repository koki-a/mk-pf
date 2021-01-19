 <section class="movies">
        <div class="movies_inner inner">
            <div class="section_title">
                <h2>"{{ $user->channel }}"</h2>
            </div>
            <div class="movies_items">

            @foreach($movies as $movie)

                <div class="movies_item">
                    <div class="movies_item_head">
                        @if($movie)
                        <iframe src="{{ 'https://www.youtube.com/embed/'.$movie->url }}?controls=1&loop=1&playlist={{ $movie->url }}" frameborder="0"></iframe>
                        @else
                        <iframe src="https://www.youtube.com/embed/" frameborder="0"></iframe>
                        @endif
                    </div>
                    <div class="movies_item_body">
                        <div class="movie_comment">
                            <p>コメント：
                                @if(isset($movie->comment))
                                    {{ $movie->comment }}
                                @endif
                            </p>
                        </div>
                        <div class="movie_delete">
                        @if(Auth::id() == $movie->user_id)
                        {!! Form::open(['route' => ['movies.destroy', $movie->id], 'method' => 'delete']) !!}
                            {!! Form::submit('削除', ['class' => 'delete_btn']) !!}
                        {!! Form::close() !!}
                    @endif
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            {{ $movies->links() }}
        </div>
    </section>
