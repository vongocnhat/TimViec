<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employee_id');
            $table->string('name', 191);
            $table->unsignedInteger('career_id');
            $table->unsignedInteger('degree_id');
            $table->unsignedInteger('type_of_work_id');
            $table->unsignedInteger('experience_id');
            $table->unsignedInteger('office_id');
            $table->string('desired_job')->nullable();
            $table->unsignedInteger('desire_minimum_wage')->nullable();
            $table->string('currency')->nullable();
            $table->string('career_goals')->nullable();
            $table->tinyInteger('word');
            $table->tinyInteger('excel');
            $table->tinyInteger('power_point');
            $table->text('profile_img');
            $table->boolean('public')->nullable()->default(false);
            $table->boolean('receive_email')->nullable()->default(false);
            $table->unique(['employee_id', 'name']);

            $table->foreign('employee_id')
                  ->references('id')->on('employees')
                  ->onDelete('cascade');
            $table->foreign('career_id')
                  ->references('id')->on('careers')
                  ->onDelete('cascade');
            $table->foreign('degree_id')
                  ->references('id')->on('degrees')
                  ->onDelete('cascade');
            $table->foreign('type_of_work_id')
                  ->references('id')->on('type_of_works')
                  ->onDelete('cascade');
            $table->foreign('experience_id')
                  ->references('id')->on('experiences')
                  ->onDelete('cascade');
            $table->foreign('office_id')
                  ->references('id')->on('offices')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
