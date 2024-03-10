
@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
 <main>
       <div class="container flex flex-center">
  <div class="logo center mx-auto relative">
    <div class="mark"></div>
    <span class="p">ビ</span><!--
 --><span class="r">ビ</span><!--
 --><span class="e1">ン</span><!--
 --><span class="e2">麺</span><!--
 --><span class="d"></span>

  </div>

</div>

<div class="content">
<div class="list">
<li>材料準備
       <ul class="imagelist">
          <li>リンゴ　1/2個</li>
           <li>玉ねぎ　1/4個</li>
           <li>スプライト 180ml</li>
           <li>唐辛子　2スープん</li>
           <li>コチュジャン　2スープん</li>
           <li>醤油　2スープん</li>
           <li>砂糖　2スープん</li>
           <li>水飴　2スープん</li>
           <li>酢　2スープん</li>
           <li>素麺　200g</li>
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
         <img src="{{ asset('/image/bi.jpg') }}" alt="">
     </div>
     </div>

</main>

@endsection