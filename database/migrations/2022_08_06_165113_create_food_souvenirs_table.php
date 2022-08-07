<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_souvenirs', function (Blueprint $table) {
            $table->id();
            $table->string('image_food')->nullable();
            $table->string('image_souvenir')->nullable();
            $table->foreignId('location_id')->constrained('locations')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /***
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_souvenirs');
    }
};