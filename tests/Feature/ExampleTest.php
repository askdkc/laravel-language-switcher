<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_language_can_be_switched(): void
    {
        $this->from('/')->get('/language/en')
            ->assertRedirect('/')
            ->assertSessionHas('locale', 'en');

        $this->get('/');

        $this->assertSame('en', app()->getLocale());
    }

    public function test_unsupported_language_is_rejected(): void
    {
        $this->get('/language/unsupported')->assertNotFound();
    }
}
