<?php

namespace Tests\Feature\Database;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $test = new Test();
        $test->title = 'hoge';
        $test->author = 'tarou';
        $saveTest = $test->save();
 
        $test = [
            'title' => 'hoge',
        ];
        $this->assertDatabaseHas('tests', $test);
    }
}
