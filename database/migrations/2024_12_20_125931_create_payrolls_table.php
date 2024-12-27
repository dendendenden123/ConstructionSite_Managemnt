<?php

use App\Models\Employee;
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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employee::class, "employee_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer("hours_worked");
            $table->timestamp("pay_period_start");
            $table->timestamp("pay_period_end");
            $table->decimal("gross_salary");
            $table->decimal("deductions");
            $table->decimal("net_dalary");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
