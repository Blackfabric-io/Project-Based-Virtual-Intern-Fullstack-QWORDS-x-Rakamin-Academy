<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\PaymentMethod;
use Illuminate\View\View;

class LandingPageController extends Controller
{
    public function index(): View
    {
        return view('landing_page.index', [
            'products' => Product::featured()->take(3)->get(),
            'testimonials' => Testimonial::featured()->take(3)->get(),
            'faqs' => FAQ::active()->ordered()->get(),
            'partners' => Partner::active()->ordered()->get(),
            'paymentMethods' => PaymentMethod::active()->ordered()->get(),
        ]);
    }
}
