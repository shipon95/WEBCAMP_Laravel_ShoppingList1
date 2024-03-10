
@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
 <main>
       <div class="container flex flex-center">
  <div class="logo center mx-auto relative">
    <div class="mark"></div>
    <span class="p">ト</span><!--
 --><span class="r">ッ</span><!--
 --><span class="e1">ポ</span><!--
 --><span class="e2">ッ</span><!--
 --><span class="d">キ</span>

  </div>

</div>

<div class="content">
<div class="list">
<li>材料準備
       <ul class="imagelist">
           <li>ブルダックロゼ　一個</li>
           <li>ソーセージ　100g</li>
           <li>トッポッキ　200g</li>
           <li>牛乳　360ml</li>
           <li>ケチャップ　1スープん</li>
           <li>砂糖　1スープん</li>
        　 <li>おでん 100g</li>>
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
         <img src="{{ asset('/image/rose.jpg') }}" alt="">
     </div>
     </div>

</main>

@endsection