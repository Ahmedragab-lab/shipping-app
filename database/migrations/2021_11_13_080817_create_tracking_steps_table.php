<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_steps', function (Blueprint $table) {
            $table->id();
            $table->string('order_no');
            $table->tinyInteger('step1')->default('0');
            $table->tinyInteger ('step2')->default('0');
            $table->tinyInteger ('step3')->default('0');
            $table->tinyInteger ('step4')->default('0');
            $table->date('date');
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
        Schema::dropIfExists('tracking_steps');
    }
}
