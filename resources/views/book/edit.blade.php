@extends('layouts.app')

@section('content')

<div id="index_wrap">
    <h1>編集画面</h1>

    <form action="{{ route('book.update', ['book' => $book->id]) }}" method="post">
    @method('PUT')
    @csrf
        <tr>
            <th>タイトル</th>
            <th>著者</th>
            <th>ジャンル</th>
        </tr>
        <tr>
            <td><input type="text" name="title" value="{{ $book->title }}"></td>
            <td><input type="text" name="author" value="{{ $book->author }}"></td>
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
            </td>
        </tr>
        <tr>
            <input type="submit" value="更新">
        </tr>
    </form>
    <a href="{{ route('book.show', ['book' => $book->id]) }}"><button>詳細画面へ</button></a>
</div>

@endsection