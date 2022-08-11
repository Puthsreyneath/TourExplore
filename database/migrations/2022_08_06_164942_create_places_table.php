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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('highlight');
            $table->string('description');
            $table->string('image');
            $table->enum('category', ['Mountain', 'Beach', 'Temple', 'Popular']);
            $table->double('rate');
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
        Schema::dropIfExists('places');
    }
};