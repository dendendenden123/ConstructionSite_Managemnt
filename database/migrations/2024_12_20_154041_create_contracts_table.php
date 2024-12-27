<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Project;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class, "project_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(User::class, "user_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("details");
            $table->dateTime("date_signed");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.d
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
