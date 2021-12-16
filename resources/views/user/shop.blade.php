@extends('layouts.app')

@section('content')
<div id="index_wrap">
    <h1>店舗情報</h1>
    <label>店舗名<label>
    <p>{{ $shop->name }}</p>
    <label>メール<label>
    <p>{{ $shop->email }}</p>
    <label>住所<label>
    <p>{{ $shop->address }}</p>
    <label>電話番号<label>
    <p>{{ $shop->tel }}</p>
    <label>営業時間<label>
    <p>{{ $shop->time }}</p>
</div>
@endsection