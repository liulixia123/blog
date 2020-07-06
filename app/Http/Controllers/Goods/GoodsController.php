<?php

namespace App\Http\Controllers\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    public function index(Request $request)
    {
        return $request->input('name');
        // return " App\Http\Controllers\Goods";
    }
}
