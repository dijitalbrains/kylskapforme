<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesRefrigeratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties_refrigerators', function (Blueprint $table) {
            $table->foreignId('refrigerator_id')->constrained();
            $table->foreignId('property_id')->constrained();
            $table->primary(['refrigerator_id', 'property_id']);

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
        Schema::dropIfExists('properties_refrigerators');
    }
}
