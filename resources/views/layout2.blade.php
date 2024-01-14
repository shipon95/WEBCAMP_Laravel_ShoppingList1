<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>買い物リスト管理・韓国料理 @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('/css/nav.css') }}">
 <link rel="stylesheet" href="{{ asset('/css/a_link.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/video.css') }}">
    </head>

    <body>
<nav id="nav2">
    <a href="#">TH</a>
    <ul>
      <li><a href="/shopping_list/top">Top Page</a></li>
      <li><a href="/shopping_list/list">買い物リスト</a></li>
      <li><a href="/ingredient">材料</a></li>
      <li><a href="/recipe">レシピ</a></li>

    </ul>
  </nav>


@yield('contets')
    </body>
</html>