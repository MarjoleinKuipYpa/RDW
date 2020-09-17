<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Http\Controllers\AutoController;
use PHPUnit\Framework\TestCase;

class lasttenAuto extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function lastTen()
    {
        $response = $this->get('/');


        $this->assertTrue(true);
    }
}
