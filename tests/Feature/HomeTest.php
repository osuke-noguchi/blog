<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    public function testHomePageIsWorkingCorrectly()
    {
        $response = $this->get('/');

        $response->assertSeeText('Welcome to Laravel');
    }

    public function testContactPageIsWorkingCorrectly()
    {
        $response = $this->get('/contact');

        $response->assertSeeText('contact');
    }
}
