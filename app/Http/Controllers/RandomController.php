<?php
declare(strict_types=1);
namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RandomController extends Controller
{  public function random()
    {
       $a=rand(1,7);
       if ($a===1){
            return view('shopping_list.random');
    }
     if ($a===2){
            return view('shopping_list.random1');
    }
     if ($a===3){
            return view('shopping_list.random2');
    }
     if ($a===4){
            return view('shopping_list.random3');
    }
     if ($a===5){
            return view('shopping_list.random4');
    }
     if ($a===6){
            return view('shopping_list.random5');
    }
    if($a===7)
    {
            return view('shopping_list.random6');
    }





       }





}
