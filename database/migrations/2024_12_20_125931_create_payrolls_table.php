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
            $table->integer("hours_worked")->default(0);
            $table->timestamp("Rate")->default(0);
            $table->timestamp("Over Time")->default(0);
            $table->decimal("Gross")->default(0);
            $table->decimal("Taxes")->default(0);
            $table->decimal("Deductions")->default(0);
            $table->decimal("Netpay")->default(0);
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
