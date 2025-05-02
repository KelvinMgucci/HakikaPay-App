<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulatedEscrowsTable extends Migration
{
    public function up()
    {
        Schema::create('simulated_escrows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buyer_id');
            $table->unsignedBigInteger('seller_id');
            $table->decimal('amount', 10, 2);
            $table->text('description')->nullable();
            $table->date('delivery_date')->nullable();
            $table->timestamp('delivery_time')->nullable();
            $table->boolean('is_confirmed')->default(false);
            $table->boolean('is_released')->default(false);
            $table->string('status')->default('pending'); // pending, delivered, confirmed, released, cancelled
            $table->string('transaction_hash')->nullable(); // simulated blockchain hash
            $table->string('contract_address')->nullable(); // simulated smart contract address
            $table->timestamps();
        });
    }
    
    

    public function down()
    {
        Schema::dropIfExists('simulated_escrows');
    }
}
