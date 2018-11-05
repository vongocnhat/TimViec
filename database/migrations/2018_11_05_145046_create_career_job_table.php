<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_job', function (Blueprint $table) {
            $table->unsignedInteger('career_id');
            $table->unsignedInteger('job_id');
            $table->primary(['career_id', 'job_id']);
            $table->foreign('career_id')
                  ->references('id')->on('careers')
                  ->onDelete('cascade');
            $table->foreign('job_id')
                  ->references('id')->on('jobs')
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
        Schema::dropIfExists('career_job');
    }
}
