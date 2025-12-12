<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        $items = collect($cart)->map(function ($item) {
            $product = Product::find($item['product_id']);
            if (! $product) return null;
            return [
                'product' => $product,
                'qty' => $item['qty'],
                'subtotal_cents' => $product->price_cents * $item['qty'],
            ];
        })->filter();

        $total_cents = $items->sum('subtotal_cents');

        return view('cart', [
            'items' => $items,
            'total_cents' => $total_cents,
        ]);
    }

    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $qty = max(1, (int) $request->input('qty', 1));

        if ($qty > $product->stock) {
            return back()->with('error', 'Requested quantity exceeds stock.');
        }

        $cart = $request->session()->get('cart', []);

        if (isset($cart[$id])) {
            $newQty = $cart[$id]['qty'] + $qty;
            if ($newQty > $product->stock) {
                return back()->with('error', 'Not enough stock to add that quantity.');
            }
            $cart[$id]['qty'] = $newQty;
        } else {
            $cart[$id] = [
                'product_id' => $id,
                'qty' => $qty,
            ];
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Added to cart.');
    }

    public function remove(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            $request->session()->put('cart', $cart);
        }
        return back();
    }
}
