<?php

namespace App\Http\Controllers\user;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $products=Product::where('status','1')->where('category_id',$id)->get();
        $category=Category::where('status','1')->get();
        $cate=Category::find($id);
        return view('user.page.product',compact('products', 'category','cate'));

    }
    
}
