<?php

namespace Tests\Unit;

use App\course;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CourseFactoryTest extends TestCase
{
    /** @test */
    public function it_creates_a_valid_course_instance()
    {
        $course = factory(Course::class)->create();

        $this->assertInstanceOf(Course::class, $course);
        $this->assertDatabaseHas('courses', [
            'course_code' => $course->course_code,
            'course_name' => $course->course_name,
            'created_at' => $course->created_at,
            'updated_at' => $course->updated_at,
        ]);
    }
}
