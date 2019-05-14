<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;

use App\Http\Requests;
use Session;
use Auth;

class ProductController extends Controller
{
    public function getProduct()
    {
    	$products = Product::all();
    	return view('portfolio', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id)
    {
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $product->id);

    	$request->session()->put('cart', $cart);
    	return redirect()->route('portfolio');
    	
    }

    public function getShoppingCart()
    {
    	if(!Session::has('cart')){
    		return view('shopping-cart');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);

    	return view('shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function postCheckout(Request $request)
    {
    	if(!Session::has('cart')){
    		return view('shopping-cart');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);

    	$order = new Order();
    	$order->user_name = Auth::user()->name;
    	$order->user_id = Auth::user()->id;
    	$order->cart = serialize($cart);

    	Auth::user()->orders()->save($order);

    	Session::forget('cart');
    	return redirect()->route('home')->with('success', 'Succesfully Ordered!!!');
    }

}
