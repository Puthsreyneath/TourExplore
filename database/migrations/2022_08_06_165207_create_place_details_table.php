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
        Schema::create('place_details', function (Blueprint $table) {
            $table->id();
            $table->string('des');
            $table->string('image');
            $table->foreignId('place_id')->constrained('places')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('food_souvenir_id')->constrained('food_souvenirs')->onUpdate('cascade')
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
        Schema::dropIfExists('place_details');
    }
};