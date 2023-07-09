<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('st_name');
            $table->string('st_id')->default('empty');
            $table->string('st_mobile')->default('empty');
            $table->string('p_mobile')->default('empty');
            $table->string('lat')->default('empty');
            $table->string('lng')->default('empty');
            $table->string('depositor')->default('empty');
            $table->string('accountNo')->default('empty');
            $table->string('receipt')->default('empty');
            $table->string('note')->default('empty');
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
        Schema::dropIfExists('students');
    }
}
