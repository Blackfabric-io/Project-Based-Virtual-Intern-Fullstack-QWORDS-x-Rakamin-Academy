<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class LandingPageController extends Controller
{
    /**
     * Display the main landing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve all sections for the landing page
        $sections = Page::all();

        return view('landing_page.index', compact('sections'));
    }

    /**
     * Load dynamic content for a specific section.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSectionContent($id)
    {
        $section = Page::find($id);

        if ($section) {
            return response()->json([
                'status' => 'success',
                'data' => $section
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Section not found.'
        ], 404);
    }
}
