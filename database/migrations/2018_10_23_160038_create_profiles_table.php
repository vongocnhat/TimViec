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
            $table->unsignedInteger('employee_id');
            $table->string('name', 191);
            $table->unsignedInteger('career_id');
            $table->unsignedInteger('degree_id');
            $table->unsignedInteger('type_of_work_id');
            $table->string('desired_job')->nullable();
            $table->unsignedInteger('desire_minimum_wage')->nullable();
            $table->string('career_goals')->nullable();;
            $table->string('school');
            $table->string('type_of_school');
            $table->string('start_at', 4);
            $table->string('ended_at', 4);
            $table->string('major')->nullable();
            $table->string('graduation_type', 2)->nullable();
            $table->tinyInteger('word');
            $table->tinyInteger('excel');
            $table->tinyInteger('power_point');
            $table->text('profile_img');
            $table->boolean('public')->nullable()->default(false);
            $table->boolean('receive_email')->nullable()->default(false);
            $table->primary(['employee_id', 'name']);
            $table->foreign('employee_id')
                  ->references('id')->on('employees')
                  ->onDelete('cascade');
            $table->foreign('career_id')
                  ->references('id')->on('careers')
                  ->onDelete('cascade');
            $table->foreign('type_of_work_id')
                  ->references('id')->on('type_of_works')
                  ->onDelete('cascade');
            $table->foreign('degree_id')
                  ->references('id')->on('degrees')
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
