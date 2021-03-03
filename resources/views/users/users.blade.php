    <section class="movies">
        <div class="movies_inner inner">

            <div class="section_title">
                <h2>Movies</h2>
            </div>
            <div class="movies_items">

                @foreach($users as $user)

                @php

                $movie = $user->movies->first();

                if($movie){

                $key_name = config('app.key_name');
                $get_api_url = "https://www.googleapis.com/youtube/v3/videos?id=$movie->url&key=$key_name&part=snippet";
                $json = file_get_contents($get_api_url);

                if($json){
                $getData = json_decode( $json , true);
                if($getData['pageInfo']['totalResults']==0){
                    $video_title = "※動画が未登録です";
                    }else{
                    $video_title = $getData['items']['0']['snippet']['title'];
                }
                    }else{
                        $video_title = "※一時的な情報制限中です";
                    }
                }


                @endphp

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
                            <p>
                                @if(isset($movie->comment))
                                コメント：{{ $movie->comment }}
                                
                                @endif
                            </p>
                        </div>
                        <div class="movie_user">
                            <p>
                                ユーザー：{{ $user->name }}
                            </p>
                            @include('follow.follow_button',['user' => $user])
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            {{ $users->links() }}
        </div>
    </section>