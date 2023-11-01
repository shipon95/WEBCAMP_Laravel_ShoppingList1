@extends('admin.layout')

{{-- メインコンテンツ --}}
@section('contets')
        <menu label="リンク">
        <a href="./user/list">ユーザ一覧</a><br>
        <a href="./logout">ログアウト</a><br>
        </menu>

        <h1>管理画面</h1>
        (アクセス傾向のグラフや警告などを表示する事が多い)<br>
@endsection