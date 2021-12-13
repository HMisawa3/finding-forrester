<header>
  <h2 class="header_title">本を管理するアプリ</h2>

  @auth
    <p id='auth_name'>{{ "店舗名：".Auth::user()->name }}</p>
    <div class="header_tab">
      <button type="button" onclick="location.href='{{ route('book.home') }}'">TOP</button>
      <button type="button" onclick="location.href='{{ route('book.create') }}'">本を追加</button>
      <button type="button" onclick="location.href='{{ route('shop.show', ['shop' => Auth::id()]) }}'">ショップ情報を確認</button>
      <button type="button" onclick="location.href='{{ route('logout') }}'">ログアウト</button>
    </div>
  @else
    <div class="header_tab">
      <button type="button" onclick="location.href='{{ route('home') }}'">ログインHOME</button>
      <button type="button" onclick="location.href='{{ route('book.home') }}'">TOP</button>
    </div>
  @endauth
</header>