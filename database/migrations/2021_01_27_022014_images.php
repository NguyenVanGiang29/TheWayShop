<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Images extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path',200);
            $table->unsignedBigInteger('prd_id');
            $table->timestamps();

            $table->foreign('prd_id')->references('id')->on('Products')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Images');
    }
}
