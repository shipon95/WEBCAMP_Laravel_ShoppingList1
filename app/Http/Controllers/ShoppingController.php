<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\Auth;


class ShoppingController extends Controller
{
     protected function getListBuilder()
    {
        return ProductModel::where('user_id', Auth::id())
                       ->orderBy('name');
    }

    /**
     * 商品を表示する
     *
     * @return \Illuminate\View\View
     */
    public function shop()
    {
        // 1Page辺りの表示アイテム数を設定
        $per_page = 20;

        // 一覧の取得
        $list = $this->getListBuilder()
                     ->paginate($per_page);
/*
$sql = $this->getListBuilder()
            ->toSql();W
//echo "<pre>\n"; var_dump($sql, $list); exit;
var_dump($sql);
*/
        //
        return view('shopping', ['list' => $list]);
    }
}
