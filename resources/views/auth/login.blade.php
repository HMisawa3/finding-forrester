@extends('layouts.app')

@section('content')
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
  <input type="submit" value="ログイン">
</form>
    <button type="button" onclick="location.href='{{ route('register') }}'">アカウント新規登録</button>
@endsection
