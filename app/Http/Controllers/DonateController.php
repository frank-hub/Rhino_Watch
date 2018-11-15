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
        $donates = Donate::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart();
    }
}
