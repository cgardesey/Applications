<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');

//            $table->unsignedInteger('course_id')->nullable();
            $table->longText('profile_image')->nullable();
            $table->string('title')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('other_names')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('primary_contact')->nullable();
            $table->string('auxiliary_contact')->nullable();
            $table->string('email')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('last_educational_institution_attended')->nullable();
            $table->string('highest_educational_level')->nullable();
            $table->string('occupation')->nullable()->nullable();
            $table->unsignedInteger('years_of_working_experience')->nullable();
            $table->longText('cv')->nullable();
            $table->longText('highest_educational_cert')->nullable();
            $table->string('course')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
