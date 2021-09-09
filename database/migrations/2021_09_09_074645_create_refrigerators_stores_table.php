<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefrigeratorsStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refrigerators_stores', function (Blueprint $table) {
            $table->foreignId('refrigerator_id')->constrained();
            $table->foreignId('store_id')->constrained();
            $table->text('name');
            $table->string('price');
            $table->string('shipping_price')->nullable();
            $table->string('delivery_type')->nullable();
            $table->string('stock_status')->nullable();
            $table->string('stock_status_text')->nullable();
            $table->text('product_url')->nullable();
            $table->string('external_id');

            $table->primary(['refrigerator_id', 'store_id', 'external_id'], 'refrigerators_stores_primary');
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
        Schema::dropIfExists('refrigerators_stores');
    }
}
