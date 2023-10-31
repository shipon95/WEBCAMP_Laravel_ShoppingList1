<?php
declare(strict_types=1);

namespace App\Http\Controllers;
use App\Http\Requests\Shopping_listRegisterPostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Shopping_list as Shopping_listModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ShoppingListController extends Controller
{
    //
      protected function getListBuilder()
    {
        return Shopping_listModel::where('user_id', Auth::id())
                     ->orderBy('name')
                     ->orderBy('created_at');
    }

 public function list()
    {
        // 1Page辺りの表示アイテム数を設定
        $per_page = 20;

        // 一覧の取得
        $list = $this->getListBuilder()
                     ->paginate($per_page);
/*
$sql = $this->getListBuilder()
            ->toSql();
//echo "<pre>\n"; var_dump($sql, $list); exit;
var_dump($sql);
*/
        //
        return view('shopping_list.list', ['list' => $list]);
    }
public function register(Shopping_listRegisterPostRequest $request)
    {
        // validate済みのデータの取得
        $datum = $request->validated();
        //
        //$user = Auth::user();
        //$id = Auth::id();
        //var_dump($datum, $user, $id); exit;

        // user_id の追加
        $datum['user_id'] = Auth::id();

        // テーブルへのINSERT
        try {
            $r = Shopping_listModel::create($datum);
        } catch(\Throwable $e) {
            // XXX 本当はログに書く等の処理をする。今回は一端「出力する」だけ
            echo $e->getMessage();
            exit;
        }

        // タスク登録成功
        $request->session()->flash('front.task_register_success', true);

        //
        return redirect('/shopping_list/list');
    }
 protected function getTaskModel($task_id)
    {
        // task_idのレコードを取得する
        $task = TaskModel::find($task_id);
        if ($task === null) {
            return null;
        }
        // 本人以外のタスクならNGとする
        if ($task->user_id !== Auth::id()) {
            return null;
        }
        //
        return $task;
    }
    protected function singleTaskRender($task_id, $template_name)
    {
        // task_idのレコードを取得する
        $task = $this->getTaskModel($task_id);
        if ($task === null) {
            return redirect('/task/list');
        }

        // テンプレートに「取得したレコード」の情報を渡す
        return view($template_name, ['task' => $task]);
    }






}
