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
        Schema::create('getservices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('personalinfo_id')->constrained('personal_infos')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('transport_id_id')->constrained('transport')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('peoplenum');
            $table->integer('duration');
            $table->date('startdate');
            $table->string('YN');

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
        Schema::dropIfExists('getservices');
    }
};
