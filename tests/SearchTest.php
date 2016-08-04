<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testSearch()
    {
        $this->visit('/')
            ->type('12', 'currency')
            ->select('GBP', 'currency-code')
            ->press('Search')
            ->see('12')
            ->see('GBP');
    }
}
