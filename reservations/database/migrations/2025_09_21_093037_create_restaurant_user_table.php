<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('restaurant_user', function (Blueprint $table) {
            // Foreign keys
            $table->foreignUuid('restaurant_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            // Role of this user *at this restaurant* (future-proof for manager/staff)
            $table->string('role')->default('owner');

            // Metadata you might want later
            $table->timestamp('joined_at')->nullable();

            // Classic pivot doesn’t need an auto-increment id
            $table->primary(['restaurant_id', 'user_id']);

            $table->timestamps(); // only if you want pivot timestamps
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('restaurant_user');
    }
};
