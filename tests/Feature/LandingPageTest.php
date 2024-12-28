<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LandingPageTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Create test page data
        Page::create([
            'title' => 'Home',
            'slug' => 'home',
            'content' => 'Welcome to Qwords',
            'meta_description' => 'Qwords Home Page',
            'meta_keywords' => 'hosting, cloud, indonesia'
        ]);
    }

    /** @test */
    public function landing_page_loads_successfully()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('landing_page.index');
        $response->assertSee('Welcome to Qwords');
    }

    /** @test */
    public function landing_page_contains_required_sections()
    {
        $response = $this->get('/');

        $response->assertSeeTextInOrder(['Welcome to Qwords', 'Your Trusted Hosting & Cloud Provider']);
        $response->assertSee('Contact');
    }

    /** @test */
    public function contact_form_submission_works()
    {
        $formData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'message' => 'This is a test message'
        ];

        $response = $this->post('/contact', $formData);

        $response->assertStatus(302); // Expecting a redirect after successful submission
        $this->assertDatabaseHas('contacts', [
            'email' => 'test@example.com'
        ]);
    }
}
