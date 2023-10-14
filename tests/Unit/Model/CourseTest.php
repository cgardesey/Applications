<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Course;

class CourseTest extends TestCase
{
    /**
     * Test if the Course model is an instance of Eloquent Model.
     *
     * @return void
     */
    public function testInstanceOfModel()
    {
        $course = new Course();
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Model', $course);
    }

    /**
     * Test if the Course model has the correct guarded attributes.
     *
     * @return void
     */
    public function testGuardedAttributes()
    {
        $expectedGuarded = ['id'];
        $course = new Course();
        $this->assertEquals($expectedGuarded, $course->getGuarded());
    }

    /**
     * Test if the Course model has the correct hidden attributes.
     *
     * @return void
     */
    public function testHiddenAttributes()
    {
        $expectedHidden = ['id'];
        $course = new Course();
        $this->assertEquals($expectedHidden, $course->getHidden());
    }
}
