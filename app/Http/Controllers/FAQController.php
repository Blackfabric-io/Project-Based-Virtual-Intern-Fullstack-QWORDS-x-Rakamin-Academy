<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQController extends Controller
{
    /**
     * Display a listing of FAQs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $faqs = FAQ::all();

        return view('faqs.index', compact('faqs'));
    }
}
