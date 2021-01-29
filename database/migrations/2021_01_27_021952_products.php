<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 45);
            $table->string('name_prd',200);
            $table->string('description',1000);
            $table->unsignedBigInteger('cate_id');
            $table->integer('price');
            $table->integer('is_hot');
            $table->integer('is_sale');
            $table->timestamps();

            $table->foreign('cate_id')->references('id')->on('Categoris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
}
