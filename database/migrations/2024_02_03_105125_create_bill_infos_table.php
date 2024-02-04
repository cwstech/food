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
        Schema::create('bill_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bill_id')->references('id')->on('bills');
            $table->string('item_name');
            $table->integer('qty');
            $table->decimal('price');
            $table->decimal('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_infos');
    }
};
