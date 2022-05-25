<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckFeedbackIndex(): void
    {
        $response = $this->get(route('feedback'));

        $response->assertStatus(200);
    }

    public function testCheckFeedbackSave()
    {
        $data = [
            'name' => 'Some name',
            'description' => 'Some description'
        ];
        $response = $this->post(route('feedback.save'), $data);
        $response->assertJson($data)->assertStatus(201);
    }
}
