<?php

namespace App\Http\Controllers\user;
use App\Models\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index($id)
    { 
         $listpds=null;
         $carts = Cart::where('user_id', $id);
         foreach($carts as $cart)
         {
            $listpds->add(Product::find($cart->product_id));
         }
       
         return view('user.page.cart',compact('listpds'));


    }
    public function store($product_id)
    {
      $cart = new Cart;

      $cart->user_id = 1;  //hỏi thầy xem cách gửi id của user sau khi login 
      $cart->product_id = $product_id;
      $cart->quantity = 1;

      $cart->save();
      return redirect()->route('home');   //hỏi thầy khi click vào mua hàng, trả về trang hiện tại


    }
}
