<?php
declare(strict_types=1);
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product as ProductModel;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    protected function getListBuilder()
    {
        return ProductModel::orderBy('created_at');



    }

    public function shop()
    {
         $per_page=20;

        $list = $this->getListBuilder()
                     ->paginate($per_page);

        return view('shop',['list' => $list]);
    }

 protected function getTaskModel($product_id)
    {
        // task_idのレコードを取得する
        $product = ProductModel::find($product_id);
        if ($product === null) {
            return null;
        }
        // 本人以外のタスクならNGとする
        if ($product->user_id !== Auth::id()) {
            return null;
        }
        //
        return $product;
    }

 public function complete(Request $request, $product_id)
    {
        /* タスクを完了テーブルに移動させる */
        try {
            // トランザクション開始
            DB::beginTransaction();

            // task_idのレコードを取得する
            $product = $this->getTaskModel($product_id);
            if ($product === null) {
                // task_idが不正なのでトランザクション終了
                throw new \Exception('');
            }

            // tasks側を削除する
            $product->delete();
//var_dump($task->toArray()); exit;

            // completed_tasks側にinsertする
            $dask_datum = $product->toArray();
            unset($dask_datum['created_at']);
            unset($dask_datum['updated_at']);
            $r = CompletedProductModel::create($dask_datum);
            if ($r === null) {
                // insertで失敗したのでトランザクション終了
                throw new \Exception('');
            }
//echo '処理成功'; exit;

            // トランザクション終了
            DB::commit();
            // 完了メッセージ出力
            $request->session()->flash('front.task_completed_success', true);
        } catch(\Throwable $e) {
//var_dump($e->getMessage()); exit;
            // トランザクション異常終了
            DB::rollBack();
            // 完了失敗メッセージ出力
            $request->session()->flash('front.task_completed_failure', true);
        }

        //完了 一覧に遷移する
        return redirect('/shopping_list/shop');
    }





}