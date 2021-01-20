<body class="drawer drawer--right">
    <header class="header">

        <div class="inner header_inner">
            <a href="/" class="header_title">
                <h1 class="">ShareYourMusic</h1>
            </a>
            <button type="button" class="drawer-toggle drawer-hamburger hidden-pc hidden-tab">
                <span class="sr-only">toggle navigation</span>
                <span class="drawer-hamburger-icon"></span>
            </button>
            <nav class="drawer-nav header_nav">
                <ul class="drawer-menu header_nav_items">

                    @if(Auth::check())

                    <li class="header_nav_item">{!! link_to_route('movies.create','投稿する',['id' => Auth::id()],['class' =>'drawer-menu-item header_nav_link']) !!}</li>
                    <li class="header_nav_item">{!! link_to_route('logout','ログアウト',[],['class' => 'drawer-menu-item header_nav_link' ]) !!}</li>
                    <li class="header_nav_item">{!! link_to_route('users.show','マイページ',['user' => Auth::id()],['class'=>'drawer-menu-item header_nav_link']) !!}</li>
                    

                    @else

                    <li class="header_nav_item"><a class="drawer-menu-item header_nav_link" href="guest">ゲスト</a></li>
                    <li class="header_nav_item">{!! link_to_route('signup','ユーザー登録',[],['class' => 'drawer-menu-item header_nav_link' ]) !!}</li>
                    <li class="header_nav_item">{!! link_to_route('login','ログイン',[],['class' => 'drawer-menu-item header_nav_link']) !!}</li>
                    

                    @endif

                </ul>
            </nav>
        </div>
    </header>
