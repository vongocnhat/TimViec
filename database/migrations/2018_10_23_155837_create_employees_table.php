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
            $table->text('province');
            $table->text('district');
            $table->text('ward');
            $table->text('address');
            $table->string('gender', 10);
            $table->boolean('married');
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
        Schema::dropIfExists('employees');
    }
}
