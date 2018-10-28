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
            $table->unsignedInteger('employer_id')->primary();
            $table->unsignedInteger('office_id');
            $table->unsignedInteger('type_of_work_id');
            $table->text('career_ids');
            $table->text('language_ids')->nullable();
            $table->string('name');
            $table->string('company_name', 191);
            $table->date('deadline');
            $table->unsignedInteger('viewed')->nullable()->default(0);
            $table->unsignedInteger('wage')->nullable()->default(0);
            $table->tinyInteger('experience');
            $table->string('literacy');
            $table->unsignedInteger('quantity');
            $table->string('work_location');
            $table->string('probationary_period')->nullable();
            $table->string('gender')->nullable();
            $table->tinyInteger('age_from');
            $table->tinyInteger('age_to');
            $table->text('job_description');
            $table->text('benefit')->nullable();
            $table->text('other_requirements')->nullable();
            $table->string('apply');
            $table->string('contact_person');
            $table->string('email', 191);
            $table->string('phone', 191);
            $table->text('province');
            $table->text('district');
            $table->text('ward');
            $table->text('address');
            $table->foreign('employer_id')
                  ->references('id')->on('employers')
                  ->onDelete('cascade');
            $table->foreign('office_id')
                  ->references('id')->on('offices')
                  ->onDelete('cascade');
            $table->foreign('type_of_work_id')
                  ->references('id')->on('type_of_works')
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
