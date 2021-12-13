@extends('layouts.app')

@section('content')

<div id="index_wrap">
    <div class="home_button">
        <h1>管理者の方はログインして使用して下さい</h1>
            <button type="button" onclick="location.href='{{ route('login') }}'">ログインする</button>
            <button type="button" onclick="location.href='{{ route('register') }}'">アカウント新規登録</button>

        <h1>ゲストの方はこちらから使用してください</h1>
            <button type="button" onclick="location.href='{{ route('book.home') }}'">ログインせずに使う</button>
            <p>*編集権限なし</p>
    </div>

    <form action="/" method="post">
    @csrf
        <input type="text" name="book" size="20"/>
        <input type="submit" value="Submit"/>
    </form>

    @if(isset($json_decode['items']))
    @foreach ($json_decode['items'] as $item)
    <table>
        <tr>
            <td>{{ $item['volumeInfo']['title'] }}</td>
            @if( isset($item['volumeInfo']['imageLinks']['smallThumbnail'] ))
            <td><img src="{{ $item['volumeInfo']['imageLinks']['smallThumbnail'] }}"></td>
            @endif
        </tr>
    </table>
    @endforeach
    @endif
</div>

@endsection