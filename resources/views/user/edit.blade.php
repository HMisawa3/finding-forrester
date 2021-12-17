@extends('layouts.app')

@section('content')

<div id="index_wrap">
    <h1>ショップ情報編集</h1>

    <form class="shop_edit_form" action="{{ route('shop.update')}}" method="post">
    @method('PUT')
    @csrf
    <label>店舗名</label>
        <input class="shop_edit" type="text" name="name" value="{{ $shop->name }}">
    <label>メールアドレス</label>
        <input class="shop_edit" type="email" name="email" value="{{ $shop->email }}">
    <label>パスワード</label>
        <input class="shop_edit" type="password" name="password" value="{{ $shop->password }}" readonly="readonly">
    <label>新しいパスワード</label>
        <input class="shop_edit" type="password" name="newPassword">
    <label>住所</label>
        <input class="shop_edit" type="text" name="address" value="{{ $shop->address }}">
    <label>電話番号</label>
        <input class="shop_edit" type="number" name="tel" value="{{ $shop->tel }}">
    <label>営業時間</label>
        <input class="shop_edit" type="text" name="time" value="{{ $shop->time }}">
    <label>イメージ画像</label>
        <input class="shop_edit" type="file" name="image" value="{{ $shop->image }}">
        <input class="shop_edit_button" type="submit">
    </form>
</div>

@endsection