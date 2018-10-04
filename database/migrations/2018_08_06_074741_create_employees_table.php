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
            $table->string('first_name',30);
            $table->string('last_name',30);
            $table->string('avatar')->default('default.jpg');
            $table->string('gender','6');
            $table->string('dob');
            $table->string('hire_date');
            $table->string('position');
            $table->string('email');
            $table->decimal('monthly_leave');
            $table->string('status');
            $table->string('number');
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
