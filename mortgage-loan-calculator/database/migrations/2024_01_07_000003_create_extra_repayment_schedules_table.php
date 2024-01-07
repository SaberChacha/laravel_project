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
        Schema::create('extra_repayment_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loan_id');
            $table->foreign('loan_id')->references('id')->on('loans');
            $table->unsignedInteger("month_number");
            $table->unsignedFloat("starting_balance");
            $table->unsignedFloat("monthly_payment");
            $table->unsignedFloat("principal");
            $table->unsignedFloat("interest");
            $table->unsignedFloat("extra_repayment");
            $table->unsignedFloat("ending_balance");
            $table->unsignedInteger("remaining_loan_term");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_repayment_schedules');
    }
};