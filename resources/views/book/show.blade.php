@extends('layouts.app')

@section('content')

<div id="index_wrap">
    <h1>詳細画面</h1>
    <table>
        <tr>
            <th>タイトル</th>
            <th>著者</th>
            <th>ジャンル</th>
        </tr>
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->type }}</td>
        </tr>
    </table>
    <a href="{{ route('book.edit', ['book' => $book->id]) }}"><button>編集</button></a>
</div>

@endsection