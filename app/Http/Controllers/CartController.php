<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function summary()
    {
        return view('site.pages.cart-summary');
    }

    public function save(request $request)
    {
        $request->validate([
            'product_variation_id'=> 'required'
        ]);

        $cart = \App\Models\Cart::firstOrCreate([
            'session_id'=> session()->getId()
        ]);



        $cart->photoVariations()->syncWithoutDetaching($request->product_variation_id);

        return back()->with(['successMessage' => 'Product has been added to cart successfully']);
    }

    public function destroy(request $request)
    {
        $cart = \App\Models\Cart::where('session_id',session()->getId())->first();
        $cart->photoVariations()->detach($request->id);
        return back();
    }
}
