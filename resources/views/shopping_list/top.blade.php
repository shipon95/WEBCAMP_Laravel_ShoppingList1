@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
        <h1>Top Page</h1>
<a href="/shopping_list/list">買い物リスト</a><br>


 <form action="/shopping_list/random" method="get">


            <button>一人でも今日はこれにしよ！</button><br>

        </form>


@endsection