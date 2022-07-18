<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('nodes');
        Schema::dropIfExists('trips');
        Schema::table('itineraries', function ($table) {
            $table->dropColumn(['itinerary_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $table->string('ordnodelist_id');
            $table->string('itinerary_id');
            $table->string('ordernum');
            $table->string('nodename');
            $table->foreign('itinerary_id')->references('itinerary_id')->on('itineraries');
            $table->timestamps();
        });

        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('tripid');
            $table->string('routeid');
            $table->string('shapeid');
            $table->foreign('routeid')->references('routeid')->on('routes');
            $table->foreign('shapeid')->references('shapeid')->on('shapes');
            $table->timestamps();
        });

        Schema::table('itineraries', function ($table) {
            $table->string('itinerary_id')->index();
        });

    }
};
