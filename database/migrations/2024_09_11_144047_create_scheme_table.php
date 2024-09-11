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
        Schema::create(table: 'scheme', callback: function (Blueprint $table): void {
            $table->id();
            $table->foreignId(column: 'user_id')->constrained()->onDelete(action: 'cascade');
            $table->string(column: 'name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'scheme');
    }
};
