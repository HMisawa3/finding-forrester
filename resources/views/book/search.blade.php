@extends('layouts.app')

@section('content')

<div id="index_wrap">

    <h1>本の検索</h1>
    <form action="{{ route('search') }}" method="post">
        @csrf
        <input type="text" name="search" placeholder="どの本をお探しですか？">
        <input type="submit">
    </form>

    @if(isset($key))
    <p>{{ "『".$key."』に一致するものを表示" }}</p>

    <ul>
    @foreach($books as $book)
    <div class="list_box">
        <label>タイトル</label>
        <li>{{ $book->title }}</li>
        <label>著者</label>
        <li>{{ $book->author }}</li>
        <label>ジャンル</label>
        <li>{{ $book->type }}</li>
        <div class="index_img">
            <img class="book_img" src="{{ asset('image/'. $book->image) }}" alt="画像が設定されていません">
        </div>
    </div>
    @endforeach
    </ul>
    @endif
</div>

@endsection