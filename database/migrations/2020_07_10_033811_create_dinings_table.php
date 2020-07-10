<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinings', function (Blueprint $table) {
            $table->id();
            $table->string('queue_id');
            $table->string('table_id');
            $table->string('amount')->nullable();
            $table->enum('status',['DINING','CHECKED'])->default('DINING');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dinings');
    }
}
