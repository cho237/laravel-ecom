<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\photo;

use Illuminate\Contracts\Session\Session as SessionSession;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
class ProductController extends Controller
{
    function index(){

        $data= Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data= Product::find($id);
        return view('details',['product'=>$data]);
    }
    function search(Request $req){
        $data = Product::
        where('name','like','%'. $req->input('name').'%')
        ->get();
        return view('search',['prod'=>$data]);
      }

    function addToCart(Request $req){
        if($req->session()->has('user')){

           $cart = new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartlist(){
        $userId=Session::get('user')['id'];
        $products=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as carts_id')
        ->get();
        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
}
function orderNow(){
    $userId=Session::get('user')['id'];
    $total=DB::table('carts')
    ->join('products','carts.product_id','=','products.id')
    ->where('carts.user_id',$userId)
    ->sum('products.price');

    return view('ordernow',['total'=>$total]);

}

function orderPlace(Request $req){
    $userId=Session::get('user')['id'];
    $allCart=Cart::where('user_id',$userId)->get();
    foreach($allCart as $cart)
    {
    $order= new Order;
    $order->product_id=$cart['product_id'];
    $order->user_id=$cart['user_id'];
    $order->status="pending";
    $order->payment_method=$req->payment;
    $order->payment_status="pending";
    $order->address=$req->address;
    $order->save();
    $allCart=Cart::where('user_id',$userId)->delete();
   



    }

    }

function myOrders(){
    $userId=Session::get('user')['id'];
   $orders= DB::table('orders')
    ->join('products','orders.product_id','=','products.id')
    ->where('orders.user_id',$userId)
    ->get();

    return view('myorders',['orders'=>$orders]);

}


}
