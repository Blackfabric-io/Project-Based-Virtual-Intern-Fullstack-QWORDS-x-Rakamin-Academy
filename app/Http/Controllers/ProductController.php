<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\PaymentMethod;

class ProductController extends Controller
{
    /**
     * Display a listing of hosting packages.
     *
     * @return \Illuminate\View\View
     */
    public function hostingPackages()
    {
        $hostingPackages = Product::where('category_id', 1)->with('features', 'paymentMethods')->get();

        return view('products.hosting', compact('hostingPackages'));
    }

    /**
     * Display a listing of domain products.
     *
     * @return \Illuminate\View\View
     */
    public function domainProducts()
    {
        $domainProducts = Product::where('category_id', 2)->with('features', 'paymentMethods')->get();

        return view('products.domains', compact('domainProducts'));
    }

    /**
     * Display a listing of SSL certificates.
     *
     * @return \Illuminate\View\View
     */
    public function sslCertificates()
    {
        $sslCertificates = Product::where('category_id', 3)->with('features', 'paymentMethods')->get();

        return view('products.ssl', compact('sslCertificates'));
    }
}
