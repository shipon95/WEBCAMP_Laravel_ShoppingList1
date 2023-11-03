<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// getPriorityString() は同じものを使うので \App\Models\Task を継承する。本来は、Traitにするとベター(書ける人は書いてみましょう)
class Completed_Shopping_list extends \App\Models\Shopping_list
{
    use HasFactory;

    /**
     * 複数代入不可能な属性
     */
    protected $guarded = [];

}