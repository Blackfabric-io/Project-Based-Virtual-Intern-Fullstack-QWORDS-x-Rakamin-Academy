<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\PaymentMethod;
use Illuminate\View\View;

class LandingPageController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $partners = Partner::active()->get();
        $faqs = FAQ::active()->ordered()->get();
        $paymentMethods = PaymentMethod::active()->ordered()->get();

        return view('landing_page.index', compact(
            'products',
            'services',
            'testimonials',
            'partners',
            'faqs',
            'paymentMethods'
        ));
    }
}
