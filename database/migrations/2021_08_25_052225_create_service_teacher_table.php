<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_teacher', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("service_id")->references("id")->on("services")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("teacher")->references("id")->on("teachers")->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('service_teacher');
    }
}
