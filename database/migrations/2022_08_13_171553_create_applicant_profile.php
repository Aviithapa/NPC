<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_profile', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('first_name_nepali');
            $table->string('middle_name_nepali')->nullable();
            $table->string('last_name_nepali');
            $table->date('dob_english');
            $table->date('dob_nepali');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('grandfather_name');
            $table->string('citizenship_number')->unique();
            $table->string('issued_district');
            $table->string('passport_number')->nullable()->unique();
            $table->string('blood_group')->nullable();
            $table->string('citizenship_front');
            $table->string('citizenship_backend');
            $table->string('profile_picture');
            $table->string('signature');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('applicant_profile');
    
    }
};
