<main>
        <top class="top">
            <div class="inner top_inner">
            <div class="top_box">
                    <p class="top_title">Share <br class="hidden-pc hidden-tab">Your <br class="hidden-pc hidden-tab">Music</p>
                    <p class="top_sub hidden-sp">君の好きな音楽を<br class="hidden-pc">共有しよう</p>
                </div>
                <div class="top_footer">

                @if(Auth::check())
                    <a class="btn top_btn" href="movies/create">▶︎</a>
                @else
                <a class="btn top_btn" href="users/create">▶︎</a>
                @endif

                </div>
            </div>
        </top>
    </main>