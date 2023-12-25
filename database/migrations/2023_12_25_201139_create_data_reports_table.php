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
        Schema::create('data_reports', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->decimal('amount', 5, 2)->nullable()->default(00.00);
            $table->text('payment_concept')->nullable();
            $table->date('payment_date')->nullable();
            $table->integer('invoice')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_reports');
    }
};
