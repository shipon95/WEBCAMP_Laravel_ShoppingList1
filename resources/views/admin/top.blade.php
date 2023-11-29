@extends('admin.layout')

{{-- メインコンテンツ --}}
@section('contets')

 <h1>管理画面</h1>
        <menu label="リンク">
        <a href="/admin/top">管理画面Top</a><br>
        <a href="/admin/user/list">ユーザ一覧</a><br>
        <a href="/admin/logout">ログアウト</a><br>
           <a href="/admin/register">register</a><br>



        </menu>



@endsection


