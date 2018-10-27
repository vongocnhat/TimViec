<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->unsignedInteger('profile_id');
            $table->string('company_name', 191);
            $table->unsignedInteger('office_id');
            $table->date('start_at');
            $table->date('ended_at');
            $table->string('wage')->nullable()->default(0);
            $table->text('job_description');
            $table->text('achievement');
            $table->primary(['profile_id', 'company_name']);
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
        Schema::dropIfExists('experiences');
    }
}
