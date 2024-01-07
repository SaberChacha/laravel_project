<?php

namespace App\Http\Controllers;

use App\Models\ExtraRepaymentSchedule;
use App\Models\Loan;
use Illuminate\Http\Request;

class AmortizationHeaderController extends Controller
{
   
    public function generate_extra_payment_schedule( Request $request)  {
        $loanId = $request->loan_id;
        $loan = Loan::find($loanId);

        $loan->extra_repayment = $request->extra_payment;
        $loan->save();

        $startingBalance = $loan->loan_amount;
        $extraRepayment = $request->extra_payment;
        $remainingBalance = $loan->loan_amount;

        $numberOfMonths = $loan->loan_term * 12 ;
        $startingBalance =$loan->loan_amount;
        $amortizationData = [];

        $remainingTerm = 0;

        for ($i = 0; $i < $numberOfMonths; $i++) {
            if ($remainingBalance <= 0) break;
            $interest = $startingBalance * ($loan->annual_interest_rate / 100 / 12);
            $principal = $loan->monthly_payment - $interest;
            $endingBalance = $startingBalance - $principal;

            if ($extraRepayment > 0) {
                $principal += $extraRepayment;
            }

            if ($principal > $remainingBalance) {
                $principal = $remainingBalance;
            }

            $remainingBalance -= $principal;
            $remainingTerm++;

            $amortizationData[] = [
                "loan_id" =>$loan->id,
                'month_number' => $i + 1,
                'starting_balance' => $startingBalance,
                'monthly_payment' => $loan->monthly_payment,
                'principal' => $principal,
                'interest' => $interest,
                'ending_balance' => $endingBalance,
                'extra_repayment' => $extraRepayment,
                'remaining_loan_term' => $remainingTerm
            ];

            $startingBalance = $endingBalance;
        }

        // Bulk insert to database
        ExtraRepaymentSchedule::insert($amortizationData);

        return view('amortization-schedule', [
            'loan' => $loan, 
            'extra_repayment' => $extraRepayment,
            'amortization_data' => $amortizationData
        ]);
    
    }

    
}