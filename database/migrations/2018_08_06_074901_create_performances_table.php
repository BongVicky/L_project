<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->integer('emp_id');
            $table->increments('id');
            $table->integer('job_knowledge')->nullable();
            $table->integer('work_quality')->nullable();
            $table->integer('attendance')->nullable();
            $table->integer('com_listen')->nullable();
            $table->integer('dependability')->nullable();
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
        Schema::dropIfExists('performances');
    }
}
