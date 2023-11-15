@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
           <h1>キムチチャーハン(김치볶음밥)</h1>

 <li>材料準備
       <ol>
           <li>お米　300g</li>
           <li>キムチ　3スープん</li>
           <li>砂糖　1スープん</li>
           <li>醤油　1スープん</li>
           <li>玉ねぎ　半個</li>
           <li>ネギ　半個</li>
           <li>唐辛子　1スープん</li>
       　   <li>マユネーズ　1スープん</li>
       　   <li>モッツァレラ</li>
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