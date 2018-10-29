<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email', 191)->unique();
            $table->string('phone', 191)->unique();
            $table->string('password');
            $table->date('birthday');
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('ward_id');
            $table->text('address');
            $table->string('gender', 10);
            $table->boolean('married');
            $table->string('forget_password')->nullable();
            $table->foreign('province_id')
                  ->references('id')->on('provinces')
                  ->onDelete('cascade');
            $table->foreign('district_id')
                  ->references('id')->on('districts')
                  ->onDelete('cascade');
            $table->foreign('ward_id')
                  ->references('id')->on('wards')
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
        Schema::dropIfExists('employees');
    }
}
