<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanAmortizationSchedule extends Model
{
    use HasFactory;

    protected $table = "loan_amortization_schedules";

    protected $fillable = [
        "loan_id",
        "month_number",
        "starting_balance",
        "monthly_payment",
        "principal",
        "interest",
        "ending_balance"
    ];
    
}