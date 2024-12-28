<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::ordered()->get();
        return view('products.index', compact('products'));
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        $relatedProducts = Product::where('id', '!=', $product->id)
            ->ordered()
            ->take(3)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }

    /**
     * Compare products side by side.
     */
    public function compare(Request $request)
    {
        $productIds = explode(',', $request->query('ids', ''));
        $products = Product::whereIn('id', $productIds)->ordered()->get();

        if ($products->isEmpty()) {
            $products = Product::ordered()->take(3)->get();
        }

        return view('products.compare', compact('products'));
    }
}
