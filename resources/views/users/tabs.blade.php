@include('follow.follow_button', ['user' => $user])

<div class="tabs">
    <div class="tabs_inner inner">

        <ul class="tabs_items">
            <li class="tab_item {{ Request::is('users/' . $user->id) ? 'active' : '' }}">
                <div class="tab_body">
                    <a href="{{ route('users.show',['user'=>$user->id]) }}" class="tab_name">
                        <p>マイチャンネル</p>
                        <div class="count">
                            <p>{{ $count_movies }}</p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="tab_item {{ Request::is('users/*/followings') ? 'active' : '' }}">
                <div class="tab_body">
                    <a href="{{ route('followings',['id'=>$user->id]) }}" class="tab_name">
                        <p>フォロー中</p>
                        <div class="count">
                            <p>{{ $count_followings }}</p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="tab_item {{ Request::is('users/*/followers') ? 'active' : '' }}">
                <div class="tab_body">
                    <a href="{{ route('followers',['id'=>$user->id]) }}" class="tab_name">
                        <p>フォロワー</p>
                    <div class="count">
                            <p>{{ $count_followers }}</p>
                        </div>
                    </a>
                </div>
            </li>
        </ul>

    </div>
</div>