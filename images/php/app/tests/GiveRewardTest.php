<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class GiveRewardTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function giveRewardExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }
}
