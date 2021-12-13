@extends('layouts.app')

@section('content')

<h1>新しい本の登録だ！！！</h1>
<a href="{{ route('book.home') }}">HOMEへ戻る</a>
<div class="create_wrap">
    <form action="/book/create" method="post" enctype="multipart/form-data">
        @csrf
        <label>Title</label>
            <input type="text" name="title" placeholder="タイトルを入れてください">
        <label>著者</label>
            <input type="text" name="author" placeholder="著者を入れてください">
        <label>ジャンル</label>
        <select name="type">
            <option value="">--ジャンルを選んでください--</option>
            <option value="ホラー">ホラー</option>
            <option value="ミステリー">ミステリー</option>
            <option value="アクション">アクション</option>
            <option value="恋愛">恋愛</option>
            <option value="SF">SF</option>
            <option value="歴史">歴史</option>
            <option value="自伝">自伝</option>
        </select>
        <label>入荷数</label>
            <input type="text" name="stock">
        <label>画像</label>
            <input type="file" name="image">
        <input type="submit" value="追加">
    </form>
</div>

<h3>取扱書籍</h3>
<ul>
@foreach($books as $book)
    <li>{{ $book->title }}</li>
    <li><a href="{{ route('book.show', ['book' => $book->id]) }}"><button>詳細</button></a></li>
@endforeach
</ul>
@endsection