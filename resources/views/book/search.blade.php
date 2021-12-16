@extends('layouts.app')

@section('content')

<div id="index_wrap">

    <h1>書店から本を検索</h1>
    <form action="{{ route('search') }}" method="post">
    @csrf
        <input type="text" name="a_search" placeholder="どの本をお探しですか？">
        <button type="submit">検索</button>
    </form>

    <h1>GoogleBookから本を検索</h1>
    <form action="{{ route('search') }}" method="post">
    @csrf
        <input type="text" name="b_search" size="20" placeholder="どの本をお探しですか？">
        <button type="submit" value="Submit">検索</button>
    </form>
</div>

    @if(isset($key))
    <p>{{ "『".$key."』に一致するものを表示" }}</p>
    @endif

    @if(isset($books))
        <ul>
        @foreach($books as $book)
        <div class="list_box">
            <label>タイトル</label>
            <li>{{ $book->title }}</li>
            <label>著者</label>
            <li>{{ $book->author }}</li>
            <label>ジャンル</label>
            <li>{{ $book->type }}</li>
            <li><a href="{{ route('shop.show', ['shop' => $book->id]) }}">取扱店舗</a></li>
            <div class="index_img">
                <img class="book_img" src="{{ asset('image/'. $book->image) }}" alt="画像が設定されていません">
            </div>
        </div>
        @endforeach
        </ul>
    @endif

    @if(isset($json_decode['items']))
        <ul>
        @foreach ($json_decode['items'] as $item)
        <div class="list_box">
            <label>タイトル</label>
            <li>{{ $item['volumeInfo']['title'] }}</li>
            <label>著者</label>
            @if (array_key_exists('description', $item['volumeInfo']))
                <li>{{ $item['volumeInfo']['authors'][0] }}</li>
            @else
                <li>著者不明</li>
            @endif
            <div class="index_img">
                @if( isset($item['volumeInfo']['imageLinks']['smallThumbnail'] ))
                <li><img src="{{ $item['volumeInfo']['imageLinks']['smallThumbnail'] }}"></li>
                @endif
            </div>
        </div>
        @endforeach
        </ul>
    @endif

@endsection