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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sku');
            $table->string('metal');
            $table->string('weight', 6);
            $table->string('insert_1');
            $table->string('insert_2')->nullable();
            $table->string('insert_3')->nullable();
            $table->string('insert_4')->nullable();
            $table->string('insert_5')->nullable();
            $table->string('insert_6')->nullable();
            $table->string('size', 4)->nullable();
            $table->string('availability');
            $table->integer('price')->nullable();
            $table->foreignId('category_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->boolean('favorites')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
