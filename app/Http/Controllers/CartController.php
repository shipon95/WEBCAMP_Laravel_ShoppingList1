<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\cart as cartModel;

class CartController extends Controller
{
    /**
     * 一覧用の Illuminate\Database\Eloquent\Builder インスタンスの取得
     */
    protected function getListBuilder()
    {
        return cartModel::orderBy('created_at');
    }

    /**
     * タスク一覧ページ を表示する
     *
     * @return \Illuminate\View\View
     */
    public function cart()
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
        return view('cart', ['list' => $list]);
    }

}