

@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
 <main>
       <div class="container flex flex-center">
  <div class="logo center mx-auto relative">
    <div class="mark"></div>
    <span class="p">ボ</span><!--
 --><span class="r">ッ</span><!--
 --><span class="e1">サ</span><!--
 --><span class="e2">ム</span><!--
 --><span class="d"></span>

  </div>

</div>

<div class="content">
<div class="list">
<li>材料準備
       <ul class="imagelist">
         <li>豚バラ　400g</li>
           <li>コーラ 540ml</li>
           <li>醤油　180ml</li>
           <li>にんにく　1スープん</li>
       </ul>
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
</div>

     <div class="image">
         <img src="{{ asset('/image/bo.jpg') }}" alt="">
     </div>
     </div>

</main>

@endsection