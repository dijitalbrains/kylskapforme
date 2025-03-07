<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFavoriteRefrigeratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_favorite_refrigerators', function (Blueprint $table) {
            $table->foreignId('refrigerator_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->primary(['refrigerator_id', 'user_id']);

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
        Schema::dropIfExists('user_favorite_refrigerators');
    }
}
