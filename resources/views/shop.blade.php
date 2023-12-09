@extends('layout')

{{-- タイトル --}}
@section('title')(詳細画面)@endsection
{{-- メインコンテンツ --}}
@section('contets')
 <a href="/shopping_list/top">TOP</a><br>
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
               <td><form style="margin: 0"action="{{ route('addcart', ['product_id' => $products->id]) }}" method="post">
             @csrf <button onclick='return confirm("この「買うもの」を「完了」にします。よろしいですか？");' >cart</button>
             </form>


@endforeach
</table>

現在 {{ $list->currentPage() }} ページ目<br>
        @if ($list->onFirstPage() === false)
            <a href="/shop">最初のページ</a>
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
         <a href="/cart">cart</a><br>
        <hr>
 <menu label="リンク">
        <a href="/logout">ログアウト</a><br>
        </menu>




@endsection
