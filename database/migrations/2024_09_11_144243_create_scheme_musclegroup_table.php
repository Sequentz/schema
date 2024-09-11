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
        Schema::create(table: 'scheme_musclegroup', callback: function (Blueprint $table): void {
            $table->id();
            $table->foreignId(column: 'scheme_id')->constrained(table: 'scheme')->onDelete(action: 'cascade');
            $table->foreignId(column: 'musclegroup_id')->constrained(table: 'musclegroups')->onDelete(action: 'cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'scheme_musclegroup');
    }
};
