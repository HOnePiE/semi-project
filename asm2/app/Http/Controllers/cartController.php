<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class cartController extends Controller
{
    //
    public function addToCart(Request $request, $productId) {
        $product = product::find($productId);
    
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found.');
        }
    
        $cart = Session::get('cart', []);
    
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'name' => $product->productName,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }
    
        Session::put('cart', $cart);
    
        return redirect()->route('products.index')->with('success', 'Product added to cart.');
    }
   
    public function updateCart(Request $request, $productId) {
        $cart = Session::get('cart', []);
    
        if (isset($cart[$productId])) {
            $quantity = $request->input('quantity');
            $cart[$productId]['quantity'] = $quantity;
        }
    
        Session::put('cart', $cart);
    
        return redirect()->route('cart.index')->with('success', 'Cart updated.');
    }
    
    public function removeFromCart($productId) {
        $cart = Session::get('cart', []);
    
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }
    
        Session::put('cart', $cart);
    
        return redirect()->route('cart.index')->with('success', 'Product removed from cart.');
    }
    
    
    
    
    
    
}
