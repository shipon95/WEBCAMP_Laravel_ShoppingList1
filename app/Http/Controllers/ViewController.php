<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function random()
    {
        return view('shopping_list.random');
    }

    public function random1()
    {
        return view('shopping_list.random1');
    }

    public function random2()
    {
        return view('shopping_list.random2');

    }

    public function random3()
    {
        return view('shopping_list.random3');
    }

    public function random4()
    {
        return view('shopping_list.random4');


    }

    public function random5()
    {
        return view('shopping_list.random5');
    }
    public function random6()
    {
        return view('shopping_list.random6');
    }




}
