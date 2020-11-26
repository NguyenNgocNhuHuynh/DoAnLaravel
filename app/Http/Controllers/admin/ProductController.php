<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('status','1')->get();
        return view('admin.page.product.index',compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.page.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->detail = $request->detail;    
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id =  $request->get('cate');
      
        if($request->image !=null)
        {

            $request->validate([

                'image'=> 'required|image|mimes:jpg,jpeg,png|max:2048'

            ]);

            $name = convert_vi_to_en($product->name);  //name : Như Huỳnh -> name: nhu-huynh.png
            $imageName = $name.'.'.$request->image->extension();
            $request->image->move(public_path('admin/img/product'), $imageName);
            $product->image = $imageName;
            
            $product->save();

        }
        return redirect()->route('product.index');

            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products= Product::find($id);
        return view('admin.page.product.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.page.product.edit',compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id =  $request->get('cate');
        if($request->image !=null)
        {
            $request->validate([

                'image'=> 'required|image|mimes:jpg,jpeg,png|max:2048'

            ]);

            $name = convert_vi_to_en($product->name);  //name : Như Huỳnh -> name: nhu-huynh.png
            $imageName = $name.'.'.$request->image->extension();
            $request->image->move(public_path('admin/img/product'), $imageName);
            $product->image = $imageName;
            
           
        }
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->status=0;
        $product->save();
        return redirect()->route('product.index');
    }
}

 function convert_vi_to_en($str) {
     $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
     $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
     $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
     $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
     $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
     $str = preg_replace("/(đ)/", "d", $str);
     $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
     $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
     $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
     $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
     $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
     $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
     $str = preg_replace("/(Đ)/", "D", $str);
     $str = str_replace(" ", "-",$str);
     return $str;
 }
