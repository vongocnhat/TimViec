<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageProfileTable extends Migration
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
            $table->tinyInteger('listening');
            $table->tinyInteger('speaking');
            $table->tinyInteger('reading');
            $table->tinyInteger('writing');
            $table->unique(['language_id', 'profile_id']);
            $table->foreign('language_id')
                  ->references('id')->on('languages')
                  ->onDelete('cascade');
            $table->foreign('profile_id')
                  ->references('id')->on('profiles')
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
