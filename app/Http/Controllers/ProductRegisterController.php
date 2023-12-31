<?php
declare(strict_types=1);
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ShoppingRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Models\Product as ProductModel;
use Symfony\Component\HttpFoundation\StreamedResponse;


class ProductRegisterController extends Controller
{
    protected function getListBuilder()
    {
        return ProductModel::orderBy('created_at');



    }

    public function top()
    {
         $per_page=20;

        $list = $this->getListBuilder()
                     ->paginate($per_page);

        return view('productregister',['list' => $list]);
    }

    public function register(ShoppingRequest $request)
    {
   $datum1 = $request->validated();
 $datum1['user1_id'] = Auth::id();

try {
            $r = ProductModel::create($datum1);
        } catch(\Throwable $e) {
            // XXX 本当はログに書く等の処理をする。今回は一端「出力する」だけ
            echo $e->getMessage();
            exit;
        }


          return redirect('/register1');
    }








}