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
        Schema::table('Logs', function (Blueprint $table) {
            //
            $table->enum('type',['exam','profile'])->default('profile')->nullable();
            $table->bigInteger('applicant_profile_id')->unsigned()->index()->nullable();
            $table->foreign('applicant_profile_id')->references('id')->on('applicant_profile')->onDelete('cascade');
         

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Logs', function (Blueprint $table) {
            //
        });
    }
};
