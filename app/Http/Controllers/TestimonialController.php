<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of testimonials.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $testimonials = Testimonial::with('partner')->get();

        return view('testimonials.index', compact('testimonials'));
    }
}
