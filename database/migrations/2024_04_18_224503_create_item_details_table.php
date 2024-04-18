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
        Schema::create('item_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_item_id');
            $table->string('unit');
            $table->decimal('price', 8, 2);
            $table->integer('calories');
            $table->decimal('protein_g', 8, 2);
            $table->decimal('calcium_g', 8, 2);
            $table->decimal('iron_mg', 8, 2);
            $table->integer('vitamin_a_iu');
            $table->decimal('vitamin_b1_mg', 8, 2);
            $table->decimal('vitamin_b2_mg', 8, 2);
            $table->decimal('niacin_mg', 8, 2);
            $table->decimal('vitamin_c_mg', 8, 2);
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('food_item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_details');
    }
};
