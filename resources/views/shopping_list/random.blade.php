@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')

        <h1>キムチチゲ(김치찌개)</h1>

       <li>材料準備
       <ol>
           <li>豚肉　300g</li>
           <li>キムチ　5~6スープん</li>
           <li>味噌　1スープん</li>
           <li>コチュジャン　1スープん</li>
           <li>醤油　2スープん</li>
           <li>にんにく　1スープん</li>
           <li>玉ねぎ　半個</li>
           <li>ネギ　半個</li>
           <li>水　560ml</li>
       　   <li>豆腐　半個</li>
       </ol>
       </li>

        <h2>「足りない材料」登録</h2>
            @if (session('front.task_register_success') == true)
                材料を登録しました！！<br>
            @endif


        <form action="/shopping_list/register" method="post">
                @csrf
        「足りない材料」名:<input name="name" value="{{ old('name') }}"><br>

         <button>「足りない材料」を登録する</button>
        </form>

     <a href="/shopping_list/list">買い物リスト</a><br>
     <a href="/shopping_list/top">TOP</a><br>

@endsection