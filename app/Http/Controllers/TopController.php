<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TopController extends Controller
{  public function top()
    {
        return view('shopping_list.top');
    }
}
