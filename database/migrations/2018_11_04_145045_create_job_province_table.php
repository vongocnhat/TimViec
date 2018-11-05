<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobProvinceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_province', function (Blueprint $table) {
            $table->unsignedInteger('job_id');
            $table->unsignedInteger('province_id');
            $table->primary(['job_id', 'province_id']);
            $table->foreign('job_id')
                  ->references('employer_id')->on('jobs')
                  ->onDelete('cascade');
            $table->foreign('province_id')
                  ->references('id')->on('provinces')
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
        Schema::dropIfExists('job_province');
    }
}
