<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('crm_interactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, "user_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("details");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_interactions');
    }
};
