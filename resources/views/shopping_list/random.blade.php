@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
 <main>
       <div class="container flex flex-center">
  <div class="logo center mx-auto relative">
    <div class="mark"></div>
    <span class="p">キ</span><!--
 --><span class="r">ム</span><!--
 --><span class="e1">チ</span><!--
 --><span class="e2">チ</span><!--
 --><span class="d">ゲ</span>

  </div>

</div>

<div class="content">
<div class="list">
<li>材料準備
      <ul class="imagelist">
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