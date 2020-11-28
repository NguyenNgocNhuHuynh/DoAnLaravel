<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class HomeController extends Controller
{
    public function index()
    {
       
        $listspSS =Product::where('category_id','1')->where('status','1')->take(3)->get();
        $listspIP=Product::where('category_id','3')->where('status','1')->take(3)->get();
        $listspXiaomi=Product::where('category_id','4')->where('status','1')->take(3)->get();
       // return view('user.page.index')->with('listspSS',$list_Samsung)->with('listspIP', $list_Iphone);
        $category=Category::where('status','1')->get();
 
        return view('user.page.index',compact('listspSS','listspIP','listspXiaomi','category'));

     

    }
    
}
