<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
  body {front-size:16pt; margin:5px;}
  h1{font-size:50pt; text-align:right; color:#f6f6f6;
    margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
  .content{margin:10px;}
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  <div class="content">
  @yield('content')
  </div>
</body>
</html>