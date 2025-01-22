<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('houseName');
            $table->string('houseNumberStreet');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->integer('zipCode');
            $table->integer('squareMeters');
            $table->integer('floors');
            $table->string('floorImages')->nullable();
            $table->integer('rooms');
            $table->string('roomImages')->nullable();
            $table->integer('bathrooms');
            $table->string('bathroomImages')->nullable();
            $table->boolean('backyard');
            $table->string('backyardImages')->nullable();
            $table->boolean('basement');
            $table->string('basementImages')->nullable();
            $table->boolean('attic');
            $table->string('atticImages')->nullable();
            $table->float('price');
            $table->boolean('furnished');
            $table->string('furnishedImages')->nullable();
            $table->string('description');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
           });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};