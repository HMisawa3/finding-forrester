<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>FIND A BOOK</title>
  <meta name="description" content="">

  <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
  <link rel="shortcut icon" href="{{ secure_asset('favicon.ico') }}">


  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
  <div id="app">
    @include('layouts/header')
    <main>
      @yield('content')
    </main>
  </div>
</body>

</html>
