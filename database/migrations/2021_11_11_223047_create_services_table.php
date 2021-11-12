<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('serve_name');
            $table->string('image')->default('default.jpg');
            $table->longText('desc');
            $table->tinyInteger('status')->default('0');
            // $table->foreignId('cat_id')->references('id')->on('cats')->cascadeOnDelete();
            // $table->string('slug');
            // $table->mediumText('small_desc');
            // $table->string('qty');
            // $table->string('weight');
            // $table->string('from');
            // $table->string('to');
            // $table->tinyInteger('trending')->default('0');
            // $table->mediumText('meta_title')->nullable();
            // $table->mediumText('meta_desc')->nullable();
            // $table->mediumText('meta_keywords')->nullable();
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
        Schema::dropIfExists('services');
    }
}
