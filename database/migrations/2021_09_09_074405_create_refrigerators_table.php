<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefrigeratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refrigerators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('color_id')->nullable()->constrained();
            $table->foreignId('brand_id')->nullable()->constrained();
            $table->foreignId('category_id')->nullable()->constrained();

            $table->string('name');
            $table->string('front_view')->nullable();
            $table->string('has_freezer_section')->nullable();
            $table->string('has_door_hanging')->nullable();
            $table->string('doorway')->nullable();
            $table->string('noise_level_class')->nullable();
            $table->string('location')->nullable();
            $table->string('door_mounting')->nullable();
            $table->string('performance')->nullable();
            $table->string('energy_class_2021')->nullable();
            $table->string('energy_class_before_2021')->nullable();
            $table->string('freezer_section_defrost')->nullable();

            $table->json('no_of_compressors')->nullable();
            $table->json('no_of_shelves')->nullable();
            $table->json('freezer_star_class')->nullable();
            $table->json('freezing_capacity')->nullable();
            $table->json('storage_time_without_power')->nullable();
            $table->json('noise_level')->nullable();
            $table->json('volume')->nullable();
            $table->json('freezer_volume')->nullable();
            $table->json('fridge_volume')->nullable();
            $table->json('width')->nullable();
            $table->json('depth')->nullable();
            $table->json('height')->nullable();
            $table->json('weight')->nullable();
            $table->json('power')->nullable();
            $table->json('power_consumption')->nullable();
            $table->json('freezer_section_star_class')->nullable();
            $table->json('freezer_section_volume')->nullable();

            $table->string('external_id');

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
        Schema::dropIfExists('refrigerators');
    }
}
