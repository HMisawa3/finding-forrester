@extends('layouts.app')

@section('content')

<div id="index_wrap">
<form action="{{ route('login') }}" method="POST">
@csrf
  <tr>
    <th>メールアドレス</th>
      <td>
        <input type="email" name="email" value="{{ old('email') }}"/>
      </td>
  </tr>
  <tr>
    <th>パスワード</th>
      <td>
        <input type="password" name="password" value="{{ old('password') }}"/>
      </td>
  </tr>
  <button type="submit">ログイン</button>
</form>
    <button class="register_button" type="button" onclick="location.href='{{ route('register') }}'">アカウント新規登録</button>
</div>
@endsection
