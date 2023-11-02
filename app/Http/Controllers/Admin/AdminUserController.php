<?php
declare(strict_types=1);
namespace App\Http\Controllers\Admin;

use App\Models\User as UserModel;
use App\Models\Shopping_list as Shopping_listModel;
use App\Http\Controllers\Controller;




class AdminUserController extends Controller
{
    /**
     * ユーザの一覧 を表示する
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        $group_by_column = ['users.id', 'users.name'];
        $list = UserModel::select($group_by_column)
                         ->selectRaw('count(shopping_lists.id) AS shopping_list_num')
                         ->leftJoin('shopping_lists', 'users.id', '=', 'shopping_lists.user_id')
                         ->groupBy($group_by_column)
                         ->orderBy('users.id')
                         ->get();
//echo "<pre>\n";
//var_dump($list->toArray()); exit;
        return view('admin.user.list', ['users' => $list]);
    }
}