<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileProvinceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_province', function (Blueprint $table) {
            $table->unsignedInteger('profile_id');
            $table->unsignedInteger('province_id');
            $table->primary(['profile_id', 'province_id']);
            $table->foreign('profile_id')
                  ->references('employee_id')->on('employees')
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
        Schema::dropIfExists('profile_province');
    }
}
