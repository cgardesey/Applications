<?php

namespace Tests\Unit;

use App\Applicant;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicantFactoryTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_applicant_factory_creates_applicant()
    {
        // Create a applicant using the factory
        $applicant = factory(Applicant::class)->create();

        // Assert the applicant was created successfully
        $this->assertDatabaseHas('applicants', [
            'profile_image' => $applicant->profile_image,
//        'title' => $faker->name,
            'last_name' => $applicant->last_name,
            'first_name' => $applicant->first_name,
//        'other_names' => $faker->name,
            'gender' => $applicant->gender,
            'dob' => $applicant->dob,
            'marital_status' => $applicant->marital_status,
            'primary_contact' => $applicant->primary_contact,
            'auxiliary_contact' => $applicant->auxiliary_contact,
            'email' => $applicant->email,
            'residential_address' => $applicant->residential_address,
            'postal_address' => $applicant->postal_address,
            'last_educational_institution_attended' => $applicant->last_educational_institution_attended,
            'highest_educational_level' => $applicant->highest_educational_level,
            'occupation' => $applicant->occupation,
            'years_of_working_experience' => $applicant->years_of_working_experience,
            'cv' => $applicant->cv,
            'highest_educational_cert' => $applicant->highest_educational_cert,
            'course' => $applicant->course,
        ]);
    }
}
