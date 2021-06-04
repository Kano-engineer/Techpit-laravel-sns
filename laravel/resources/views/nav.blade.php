<nav class="navbar navbar-expand navbar-dark blue-gradient">

  <a class="navbar-brand" href="/"><i class="far fa-sticky-note mr-1"></i>Memo</a>

  <ul class="navbar-nav ml-auto">

    @guest {{--この行を追加--}}
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a> {{--この行を変更--}}
    </li>
    @endguest {{--この行を追加--}}

    @guest {{--この行を追加--}}
    <li class="nav-item">
      <a class="nav-link" href="">ログイン</a>
    </li>
    @endguest {{--この行を追加--}}
      
    @auth {{--この行を追加--}}
    <li class="nav-item">
      <a class="nav-link" href=""><i class="fas fa-pen mr-1"></i>投稿する</a>
    </li>
    @endauth {{--この行を追加--}}
    
    @auth {{--この行を追加--}}
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
                onclick="location.href=''">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}"> {{--この行を編集--}}
      @csrf {{--この行を追加--}}
    </form>
    <!-- Dropdown -->
    @endauth {{--この行を追加--}}

  </ul>

</nav>
