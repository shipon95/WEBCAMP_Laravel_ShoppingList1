@extends('admin.layout')

{{-- メインコンテンツ --}}
@section('contets')

 <h1 style="font-family: Gerogia, Serif; color: #333333; ">管理画面</h1>
        <menu label="リンク">

        <a href="/admin/user/list">ユーザ一覧</a><br>
        <a href="/admin/logout">ログアウト</a><br>



        </menu>



@endsection


