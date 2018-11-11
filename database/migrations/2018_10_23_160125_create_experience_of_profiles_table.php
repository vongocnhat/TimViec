<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceOfProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_of_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('profile_id');
            $table->string('company_name', 191);
            $table->unsignedInteger('office_id');
            $table->string('start_at', 10);
            $table->string('ended_at', 10);
            $table->string('wage')->nullable()->default(0);
            $table->text('job_description');
            $table->text('achievement');
            $table->unique(['profile_id', 'company_name']);
            $table->foreign('profile_id')
                  ->references('employee_id')->on('profiles')
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
        Schema::dropIfExists('experience_of_profiles');
    }
}
