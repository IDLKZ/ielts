<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workdays', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("weekday_id")->references("id")->on("weekdays")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("teacher_id")->references("id")->on("teachers")->cascadeOnUpdate()->cascadeOnDelete();
            $table->string("title",1000);
            $table->string("date_start")->nullable();
            $table->string("date_end")->nullable();
            $table->string("time_start")->nullable();
            $table->string("time_end")->nullable();
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
        Schema::dropIfExists('teacher_schedule');
    }
}
