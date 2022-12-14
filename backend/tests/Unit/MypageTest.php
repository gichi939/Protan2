<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\consts\ServiseAliasConst;
use Illuminate\Support\Facades\Auth;

class MypageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $service = $this->app->make(ServiseAliasConst::MYPAGE);

        $user = new User();

        $user->name = 'test';
        $user->email = 'test@email.com';
        $user->password = 'secret';

        $user->save();

        Auth::login($user);
        $result = $service->show();
        
        $this->assertNotNull($result);
        $this->assertEquals($result->id,1);
        $this->assertEquals($result->name, 'test');
        $this->assertEquals($result->email, 'test@email.com');
        $this->assertEquals($result->password, 'secret');
    }
}
