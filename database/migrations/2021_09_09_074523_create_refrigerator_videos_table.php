<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefrigeratorVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refrigerator_videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('refrigerator_id')->constrained();
            $table->string('source_id');
            $table->string('embed_url');
            $table->string('thumbnail');
            $table->smallInteger('order');
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
        Schema::dropIfExists('refrigerator_videos');
    }
}
