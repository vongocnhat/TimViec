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
            $table->string('name');
            $table->string('email', 191)->unique();
            $table->string('phone', 191)->unique();
            $table->string('password', 32);
            $table->string('company_name', 191);
            $table->string('company_size')->nullable();
            $table->string('landline_phone')->nullable();
            $table->string('about_company');
            $table->text('province');
            $table->text('district');
            $table->text('ward');
            $table->text('address');
            $table->string('website')->nullable();
            $table->string('forget_password')->nullable();
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
