<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Recommend_productController extends Controller
{
    public function index(){
        return view('admin.recommend_product.index');
    }
    //
}
