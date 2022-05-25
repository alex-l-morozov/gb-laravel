<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UploadTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckUploadIndex(): void
    {
        $response = $this->get(route('upload'));

        $response->assertStatus(200);
    }

    public function testCheckUploadSave()
    {
        $data = [
            'name' => 'Some name',
            'email' => 'test@test.ru',
            'phone' => '+79999999999',
            'description' => 'Some description'
        ];
        $response = $this->post(route('upload.save'), $data);
        $response->assertJson($data)->assertStatus(201);
    }
}
