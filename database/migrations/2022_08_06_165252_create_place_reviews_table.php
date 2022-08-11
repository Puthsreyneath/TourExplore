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
        Schema::create('place_reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('rating');
            $table->string('comment');
            $table->foreignId('place_id')->constrained('places')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')
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
        Schema::dropIfExists('place_reviews');
    }
};