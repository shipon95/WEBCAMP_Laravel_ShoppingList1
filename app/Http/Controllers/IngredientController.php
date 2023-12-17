<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class IngredientController extends Controller
{  public function index()
    {
        return view('ingredient');
    }
}
