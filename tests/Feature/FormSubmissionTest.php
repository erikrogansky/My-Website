<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use RecaptchaV3;
use Tests\TestCase;

class FormSubmissionTest extends TestCase
{
    public function testFormSubmission()
    {
        RecaptchaV3::shouldReceive('verify')
            ->once()
            ->andReturn(1.0);

        $response = $this->post(route('send_mail'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'This is a subject',
            'message' => 'Hello, this is a test message!',
        ]);

        $response->assertStatus(200);
    }
}
