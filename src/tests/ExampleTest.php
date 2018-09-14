<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $expected = [
            'status' => 'OK',
            'version' => $this->app->version()
        ];

        $this->assertEquals(
            json_encode($expected), $this->response->getContent()
        );
    }
}
