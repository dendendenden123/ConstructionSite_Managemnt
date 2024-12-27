<?php

use App\Models\Employee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Project;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class, "project_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("name");
            $table->string("description");
            $table->foreignIdFor(Employee::class, "employee_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamp("start_date");
            $table->timestamp("due_date");
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
