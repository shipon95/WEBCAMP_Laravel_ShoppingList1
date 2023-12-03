<?php
declare(strict_types=1);
namespace App\Http\Controllers;

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




}