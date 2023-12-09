@extends('admin.layout')

{{-- メインコンテンツ --}}
@section('contets')

        <h1>商品登録ページ</h1>


        @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
        <form action="/productregister" method="post">
            @csrf

            商品タイトル : <input  name="product" value="{{ old('product') }}"><br>
            商品画像 : <input type="file" name="image" accept="image/jpg,image/png"><br>
            商品メーカー : <input  name="company" value="{{ old('company') }}"  ><br>
            値段 : <input  name="cost" value="{{ old('cost') }}" ><br>
              <button>商品を登録する</button>
        </form>
 <h1>商品登録一覧</h1>


        <table border="1" >
        <tr>
            <th> 商品タイトル
            <th> 商品画像
            <th> 商品メーカー
            <th> 値段
            @foreach ($list as $products)
        <tr>

            <td>{{ $products->product }}
             <td><img src="{{asset('storage/images/'.$products->image)}}" alt="">
             <td>{{ $products->company }}
               <td>{{ $products->cost }}



 @endforeach
 </table>

現在 {{ $list->currentPage() }} ページ目<br>
        @if ($list->onFirstPage() === false)
            <a href="/register1">最初のページ</a>
        @else
            最初のページ
        @endif
        /
        @if ($list->previousPageUrl() !== null)
            <a href="{{ $list->previousPageUrl() }}">前に戻る</a>
        @else
            前に戻る
        @endif
        /
        @if ($list->nextPageUrl() !== null)
            <a href="{{ $list->nextPageUrl() }}">次に進む</a>
        @else
            次に進む
        @endif
        <br>
        <hr>
         <a href="/shopping_list/top">TOP</a><br>





@endsection
