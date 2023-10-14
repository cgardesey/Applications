<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Applicant;

class ApplicantTest extends TestCase
{
    /**
     * Test if the Applicant model is an instance of Eloquent Model.
     *
     * @return void
     */
    public function testInstanceOfModel()
    {
        $Applicant = new Applicant();
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Model', $Applicant);
    }

    /**
     * Test if the Applicant model has the correct guarded attributes.
     *
     * @return void
     */
    public function testGuardedAttributes()
    {
        $expectedGuarded = ['id'];
        $Applicant = new Applicant();
        $this->assertEquals($expectedGuarded, $Applicant->getGuarded());
    }

    /**
     * Test if the Applicant model has the correct hidden attributes.
     *
     * @return void
     */
    /*public function testHiddenAttributes()
    {
        $expectedHidden = ['id'];
        $Applicant = new Applicant();
        $this->assertEquals($expectedHidden, $Applicant->getHidden());
    }*/
}
