<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTovarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tovar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('child_id')->default(0)->nullable();
            $table->foreign('child_id')->references('id')->on('child');
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('sort_id')->default(0)->nullable();
            $table->string('seo_title')->nullable(); 
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
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
        Schema::dropIfExists('tovar');
    }
}
