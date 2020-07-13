<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use DB;

class ArticlesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndexStatus()
    {
        $response = $this->get('/articles');

        $response->assertStatus(200);
    }

    public function testAddStatus(){
        $response = $this->get('/articles/add');

        $response->assertStatus(200);
    }

    public function testGetCount(){
        $users = DB::table('articles')->count();
        $this->assertEquals(0,$users);
    }
}
