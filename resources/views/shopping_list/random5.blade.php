

@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
 <main>
       <div class="container flex flex-center">
  <div class="logo center mx-auto relative">
    <div class="mark"></div>
    <span class="p">キムチ</span><!--
 --><span class="r">チャ</span><!--
 --><span class="e1">ー</span><!--
 --><span class="e2">ハ</span><!--
 --><span class="d">ン</span>

  </div>

</div>

<div class="content">
<div class="list">
<li>材料準備
        <ul class="imagelist">
         <li>お米　300g</li>
           <li>キムチ　3スープん</li>
           <li>砂糖　1スープん</li>
           <li>醤油　1スープん</li>
           <li>玉ねぎ　半個</li>
           <li>ネギ　半個</li>
           <li>唐辛子　1スープん</li>
       　   <li>マユネーズ　1スープん</li>
       　   <li>モッツァレラ</li>
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
         <img src="{{ asset('/image/OIP.jpg') }}" alt="">
     </div>
     </div>

</main>

@endsection