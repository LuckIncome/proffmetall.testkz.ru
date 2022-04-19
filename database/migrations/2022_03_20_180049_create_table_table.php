<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tovar_id')->default(0)->nullable();
            $table->foreign('tovar_id')->references('id')->on('tovar');
            $table->string('product')->nullable();
            $table->string('mark')->nullable();
            $table->integer('size')->default(0)->nullable();
            $table->string('gost')->nullable();
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
        Schema::dropIfExists('table');
    }
}
