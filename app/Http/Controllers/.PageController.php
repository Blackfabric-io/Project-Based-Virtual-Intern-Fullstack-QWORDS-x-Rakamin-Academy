<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the specified page.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $page = Page::where('slug', $slug)
                    ->published()
                    ->firstOrFail();

        return view('pages.show', [
            'page' => $page,
            'meta' => [
                'title' => $page->title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
            ]
        ]);
    }
}
