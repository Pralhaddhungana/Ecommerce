<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_photo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained('carts','id')->onDelete('cascade');
            $table->foreignId('photo_variation_id')->constrained('photo_variations','id');
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
        Schema::dropIfExists('cart_photo');
    }
}
