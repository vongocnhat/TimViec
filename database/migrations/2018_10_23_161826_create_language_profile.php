<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_profile', function (Blueprint $table) {
            $table->unsignedInteger('language_id');
            $table->unsignedInteger('profile_id');
            $table->tinyInteger('listenning');
            $table->tinyInteger('speaking');
            $table->tinyInteger('reading');
            $table->tinyInteger('writing');
            $table->primary(['language_id', 'profile_id']);
            $table->foreign('profile_id')
                  ->references('employee_id')->on('profiles')
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
        Schema::dropIfExists('language_profile');
    }
}
