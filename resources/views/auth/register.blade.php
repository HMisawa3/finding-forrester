@extends('layouts.app')

@section('content')

<form action="{{ route('register') }}" method="POST">
@csrf
  <tr>
    <th>店舗名</th>
      <td>
        <input type="text" name="name">
      </td>
  </tr>
  <tr>
    <th>メールアドレス</th>
      <td>
        <input type="email" name="email">
      </td>
  </tr>
  <tr>
    <th>パスワード</th>
      <td>
        <input type="password" name="password">
      </td>
  </tr>
  <tr>
    <th>パスワード(確認用)</th>
      <td>
        <input type="password" name="password_confirmation">
      </td>
  </tr>
  <tr>
    <th>住所</th>
      <td>
        <input type="text" name="address">
      </td>
  </tr>
  <tr>
    <th>電話番号</th>
      <td>
        <input type="number" name="tel">
      </td>
  </tr>
  <tr>
    <th>営業時間</th>
      <td>
        <input type="text" name="time">
      </td>
  </tr>
    <input type="submit" value="登録する">
</form>

@endsection
