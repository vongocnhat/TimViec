<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employer_id');
            $table->unsignedInteger('office_id');
            $table->unsignedInteger('type_of_work_id');
            $table->unsignedInteger('degree_id');
            $table->unsignedInteger('experience_id');
            $table->unsignedInteger('salary_id');
            $table->text('career_ids')->nullable();
            $table->text('language_ids')->nullable();
            $table->text('province_ids')->nullable();
            $table->string('name');
            $table->date('deadline');
            $table->unsignedInteger('viewed')->nullable()->default(0);
            $table->tinyInteger('experience')->nullable();
            $table->unsignedInteger('quantity');
            $table->string('probationary_period')->nullable();
            $table->string('gender')->nullable();
            $table->tinyInteger('age_from');
            $table->tinyInteger('age_to')->nullable();
            $table->text('job_description');
            $table->text('benefit')->nullable();
            $table->text('other_requirements')->nullable();
            $table->boolean('apply_online')->nullable()->default(1);
            $table->string('contact_person');
            $table->string('email', 191);
            $table->string('phone', 191);
            $table->boolean('status')->nullable()->default(false);

            $table->foreign('employer_id')
                  ->references('id')->on('employers')
                  ->onDelete('cascade');
            $table->foreign('office_id')
                  ->references('id')->on('offices')
                  ->onDelete('cascade');
            $table->foreign('type_of_work_id')
                  ->references('id')->on('type_of_works')
                  ->onDelete('cascade');
            $table->foreign('degree_id')
                  ->references('id')->on('degrees')
                  ->onDelete('cascade');
            $table->foreign('experience_id')
                  ->references('id')->on('experiences')
                  ->onDelete('cascade');
            $table->foreign('salary_id')
                  ->references('id')->on('salaries')
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
        Schema::dropIfExists('jobs');
    }
}
