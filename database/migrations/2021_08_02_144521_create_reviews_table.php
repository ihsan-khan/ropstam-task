<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('rating')->nullable();
            $table->string('review')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')
                                        ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')->on('user')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
