@extends('layouts.app')

@section('content')
<div id="index_wrap">
    <h1>新しい本はこれだ！！！</h1>
    <p>1ヶ月以内に入荷した本を表示</p>

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
</div>
@endsection