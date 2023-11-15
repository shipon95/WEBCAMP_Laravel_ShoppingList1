@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
             <h1>ボッサム(보쌈)</h1>

   <li>材料準備
       <ol>
           <li>豚バラ　400g</li>
           <li>コーラ 540ml</li>
           <li>醤油　180ml</li>
           <li>にんにく　1スープん</li>
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