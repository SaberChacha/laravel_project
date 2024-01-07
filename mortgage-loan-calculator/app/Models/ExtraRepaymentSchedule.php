<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class ExtraRepaymentSchedule extends Model
{
    use HasFactory;

    protected $table = 'extra_repayment_schedules';

    protected $fillable = [
        "loan_id",
        "month_number",
        "starting_balance",
        "monthly_payment",
        "principal",
        "interest",
        "ending_balance",
        "remaining_loan_term"
    ];
   
}