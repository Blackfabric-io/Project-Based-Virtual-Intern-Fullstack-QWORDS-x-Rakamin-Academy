<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_page()
    {
        $pageData = [
            'title' => 'Test Page',
            'slug' => 'test-page',
            'content' => 'This is test content',
            'meta_description' => 'Test meta description',
            'meta_keywords' => 'test, keywords'
        ];

        $page = Page::create($pageData);

        $this->assertInstanceOf(Page::class, $page);
        $this->assertEquals($pageData['title'], $page->title);
        $this->assertEquals($pageData['slug'], $page->slug);
    }

    /** @test */
    public function it_requires_a_title()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        Page::create([
            'slug' => 'test-page',
            'content' => 'This is test content'
        ]);
    }
}
