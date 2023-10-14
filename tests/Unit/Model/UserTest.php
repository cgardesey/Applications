<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_user()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('secret123'),
        ];

        $user = User::create($userData);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($userData['name'], $user->name);
        $this->assertEquals($userData['email'], $user->email);
        $this->assertTrue(password_verify('secret123', $user->password));
    }

    /** @test */
    public function it_casts_attributes_to_native_types()
    {
        $user = factory(User::class)->create([
            'email_verified_at' => now(),
        ]);

        $this->assertInstanceOf(\DateTimeInterface::class, $user->email_verified_at);
    }

    /** @test */
    public function it_has_hidden_attributes()
    {
        $user = new User();
        $hidden = ['password', 'remember_token'];
        $this->assertEquals($hidden, $user->getHidden());
    }
}
