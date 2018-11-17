<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('profile_id');
            $table->unsignedInteger('graduate_id');
            $table->string('name', 191);
            $table->string('school');
            $table->string('type_of_school');
            $table->string('start_at', 10);
            $table->string('ended_at', 10);
            $table->string('major')->nullable();
            $table->unique(['profile_id', 'name']);
            $table->foreign('profile_id')
                  ->references('id')->on('profiles')
                  ->onDelete('cascade');
            $table->foreign('graduate_id')
                  ->references('id')->on('graduates')
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
        Schema::dropIfExists('certificates');
    }
}
