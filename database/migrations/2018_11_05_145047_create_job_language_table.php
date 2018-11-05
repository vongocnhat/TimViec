<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_language', function (Blueprint $table) {
            $table->unsignedInteger('job_id');
            $table->unsignedInteger('language_id');
            $table->primary(['job_id', 'language_id']);
            $table->foreign('job_id')
                  ->references('id')->on('jobs')
                  ->onDelete('cascade');
            $table->foreign('language_id')
                  ->references('id')->on('languages')
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
        Schema::dropIfExists('job_language');
    }
}
