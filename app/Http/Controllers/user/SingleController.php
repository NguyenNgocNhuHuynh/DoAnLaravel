<?php


namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SingleController extends Controller
{
    public function show($id)
    {
        $products= Product::find($id);
        $category=Category::where('status','1')->get();
        return view('user.page.single',compact('products','category'));
        
    }
}
