<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email', 191)->unique();
            $table->string('phone', 191)->unique();
            $table->string('password');
            $table->string('company_name', 191);
            $table->string('company_size')->nullable();
            $table->string('landline_phone')->nullable();
            $table->string('about_company');
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('ward_id');
            $table->text('address');
            $table->string('website')->nullable();
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
            $table->rememberToken();
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
        Schema::dropIfExists('employers');
    }
}
