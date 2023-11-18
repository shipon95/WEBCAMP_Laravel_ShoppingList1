@extends('admin.layout')

{{-- メインコンテンツ --}}
@section('contets')

        <h1>商品登録ページ</h1>
        <form>
            <div class="title-wrap">商品タイトル : <input type="text" name="name" placeholder="商品タイトル"></div>
            <div class="img-wrap">商品画像 : <input type="file" name="imgpath"></div>
            <div class="detail-wrap">商品説明 : <textarea type="text" name="detail" cols="30" rows="10" placeholder="商品説明"></textarea></div>
            <div class="fee-wrap">値段 : <input type="text" name="fee" placeholder="10000"></div>
            <div class="submit-wrap"><input type="submit" value="登録する"></div>
        </form>



@endsection