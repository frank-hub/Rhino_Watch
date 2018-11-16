<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donate;
use Session;
use App\Cart;
class DonateController extends Controller
{
    public function getIndex(){
        $donates = Donate::all();
        return view('shop.index', compact('donates'));
    }

    public function getAddToCart(Request $request, $id){
        $donate = Donate::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($donate,$donate->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('donate.index');
    }
    public function getCart(){
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart',['donates'=> null]);
        $cart =  new Cart($oldCart);
        return view('shop.shopping-cart',['donates'=>$cart->items,'totalAmount'=>
        $cart->totalAmount]);
    }
    public function getCheckout(){
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout',['total'=>$total]);
    }
}
