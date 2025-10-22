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
        Schema::create('scrape_purchases', function (Blueprint $table) {
            $table->id();
            $table->float('weight');
            $table->float('rate');
            $table->float('amount');
            $table->string('type');
            $table->date('date');
            $table->bigInteger('refID');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scrape_purchases');
    }
};
