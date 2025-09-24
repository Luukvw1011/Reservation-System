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
        Schema::dropIfExists('restaurant_user');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('restaurant_user', function (Blueprint $table) {
            $table->foreignUuid('restaurant_id')->constrained('restaurants')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('role')->default('owner');
            $table->timestamp('joined_at')->nullable();
            $table->primary(['restaurant_id', 'user_id']);
            $table->timestamps();
        });
    }
};
