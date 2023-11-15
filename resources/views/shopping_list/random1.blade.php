@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
            <h1>トッポッキ(떡볶이)</h1>

<li>材料準備
       <ol>
           <li>ブルダックロゼ　一個</li>
           <li>ソーセージ　100g</li>
           <li>トッポッキ　200g</li>
           <li>牛乳　360ml</li>
           <li>ケチャップ　1スープん</li>
           <li>砂糖　1スープん</li>
        　 <li>おでん 100g</li>>
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