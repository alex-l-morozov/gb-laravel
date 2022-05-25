<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MainTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCheckAbout()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function testCheckNews()
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
    }

    public function testCheckCategory()
    {
        $response = $this->get('/category');

        $response->assertStatus(200);
    }
}
