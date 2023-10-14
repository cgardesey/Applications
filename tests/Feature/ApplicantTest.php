<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Applicant;

class ApplicantTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function logged_in_user_can_view_list_of_applicants()
    {
        // Create a user and log them in
        $user = factory(User::class)->create();
        $this->actingAs($user);

        // Create some test applicants
        $applicants = factory(Applicant::class)->times(5)->create();

        // Make a GET request to the /applicants endpoint
        $response = $this->get('/applicants');

        // Assert that the response status is 200 (OK)
        $response->assertStatus(200);

        // Assert that the response contains the text "View Certificate"
        $response->assertSee("View Certificate");
    }

    /** @test */
    public function guests_cannot_view_list_of_applicants()
    {
        // Make a GET request to the /applicants endpoint without logging in
        $response = $this->get('/applicants');

        // Assert that the response status is 302 (Redirect)
        $response->assertStatus(302);

        // Assert that the guest is redirected to the login page
        $response->assertRedirect('/login');
    }
}
