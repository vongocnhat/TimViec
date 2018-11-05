<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_profile', function (Blueprint $table) {
            $table->unsignedInteger('job_id');
            $table->unsignedInteger('profile_id');
            $table->primary(['job_id', 'profile_id']);
            $table->foreign('job_id')
                  ->references('employer_id')->on('jobs')
                  ->onDelete('cascade');
            $table->foreign('profile_id')
                  ->references('employee_id')->on('profiles')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_profile');
    }
}
