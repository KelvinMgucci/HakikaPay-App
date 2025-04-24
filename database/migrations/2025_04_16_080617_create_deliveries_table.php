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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('escrow_id');
            $table->enum('status', ['processing', 'shipped', 'delivered', 'cancelled'])->default('processing');
            $table->text('tracking_info')->nullable();
            $table->timestamps();
        
            $table->foreign('escrow_id')->references('id')->on('escrows')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
