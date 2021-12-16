@extends('layouts.app')

@section('content')

<div id="index_wrap">
    <div class="home_button">
        <h1>管理者の方はログインして使用して下さい</h1>
            <button type="button" onclick="location.href='{{ route('login') }}'">ログインする</button>
            <button type="button" onclick="location.href='{{ route('register') }}'">アカウント新規登録</button>
        <h1>ゲストの方はこちらから使用してください</h1>
            <button type="button" onclick="location.href='{{ route('search') }}'">ログインせずに使う</button>
            <p>*編集権限なし</p>
    </div>

</div>

@endsection