<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\LoanAmortizationSchedule;
use Illuminate\Http\Request;

class MonthlyPaymentController extends Controller
{
    
    public function generate_amortization_schedule( Request $request)  {
        // Validate and sanitize input
        $loanId = $request->loan_id;
        $loan = Loan::find($loanId);
    
        $numberOfMonths = $loan->loan_term * 12 ;
        $startingBalance =$loan->loan_amount;
        $amortizationData = [];

        for ($i = 0; $i < $numberOfMonths; $i++) {
            $interest = $startingBalance * ($loan->annual_interest_rate / 100 / 12);
            $principal = $loan->monthly_payment - $interest;
            $endingBalance = $startingBalance - $principal;
            $amortizationData[] = [
                "loan_id" =>$loan->id,
                'month_number' => $i + 1,
                'starting_balance' => $startingBalance,
                'monthly_payment' => $loan->monthly_payment,
                'principal' => $principal,
                'interest' => $interest,
                'ending_balance' => $endingBalance,
            ];

            $startingBalance = $endingBalance;
        }

        // Bulk insert to database
        LoanAmortizationSchedule::insert($amortizationData);

        return view('amortization-schedule', [
            'loan' => $loan, 
            'amortization_data' => $amortizationData
        ]);
    }

}