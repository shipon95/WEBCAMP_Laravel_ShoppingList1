<?php
declare(strict_types=1);
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class AdminHomeController extends Controller
{
    /**
     * トップページ を表示する
     *
     * @return \Illuminate\View\View
     */
    public function top()
    {
        return view('admin.top');
    }
}