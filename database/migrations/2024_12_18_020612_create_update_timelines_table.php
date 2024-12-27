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
        Schema::create('update_timelines', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, "user_id");
            $table->bigInteger('project_id');
            $table->string('update_title');
            $table->string('update_description');
            $table->string('status');
            $table->double('progress_percentage');
            $table->string('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('update_timelines');
    }
};
