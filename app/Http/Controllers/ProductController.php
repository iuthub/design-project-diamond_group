<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{

  public function getTemplates() {
    $templates = ['album' , 'blog', 'carousel', 'checkout', 'grid', 'jumbotron', 'pricing', 'product', 'sign_in_floating_labels', 'sign_in', 'starter_template'];
    return view('templates.list', compact('templates'));
  }
  public function getTemplate($address) {
    return view('templates.'.$address);
  }



  public function getIndex() {
    $products = Product::all();
    return view('pages.index', compact('products'));
  }

  public function getHome() {
    return view('pages.home');
  }

  public function addToCart(Request $request, $id) {
    $product = Product::find($id);
    $oldCart = Session::has('cart') ? Session::get('cart'):null;
    $cart = new Cart($oldCart);
    $cart->add($product, $product->id);

    $request->session()->put('cart',$cart);
    return redirect()->route('product.index');
  }

  public function getReduceByOne($id) {
    $oldCart = Session::has('cart') ? Session::get('cart'):null;
    $cart = new Cart($oldCart);
    $cart->reduceByOne($id);

    if (count($cart->items) > 0) {
      Session::put('cart', $cart);
    } else {
      Session::forget('cart');
    }
    return redirect()->route('product.shoppingCart');
  }

  public function getRemoveItem($id) {
    $oldCart = Session::has('cart') ? Session::get('cart'):null;
    $cart = new Cart($oldCart);
    $cart->removeItem($id);

    if (count($cart->items) > 0) {
      Session::put('cart', $cart);
    } else {
      Session::forget('cart');
    }
    return redirect()->route('product.shoppingCart');
  }

  public function getCart() {
    if (!Session::has('cart')) {
      return view('pages.shopping-cart', ['products' => null]);
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    return view('pages.shopping-cart', ['products' => $cart->items, 'totalQty' => $cart->totalQty, 'totalPrice' => $cart->totalPrice]);
  }

}
