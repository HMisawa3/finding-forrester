@extends('layouts.app')

@section('content')

<div id="index_wrap">
    <h1>新しい本の登録だ！！！</h1>
    <div class="create_wrap">
        <form class="create_form" action="/book/create" method="post" enctype="multipart/form-data">
            @csrf
            <label>Title</label>
                <input class="create" type="text" name="title" placeholder="タイトルを入れてください">
            <label>著者</label>
                <input class="create" type="text" name="author" placeholder="著者を入れてください">
            <label>ジャンル</label>
            <select class="create" name="type">
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
                <input class="create" type="text" name="stock">
            <label>画像</label>
                <input class="create" type="file" name="image">
            <button class="create_button" type="submit">追加</button>
        </form>
    </div>
</div>

@endsection