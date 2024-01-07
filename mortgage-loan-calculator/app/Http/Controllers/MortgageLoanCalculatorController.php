<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MortgageLoanCalculatorController extends Controller
{
    public function index(){
        return view('loan-calculator');
    }
    public function calculate(Request $request)
{
    $validatedData = $request->validate([
        'loan_amount' => 'required|numeric|min:0',
        'annual_interest_rate' => 'required|numeric|between:1,100',
        'loan_term' => 'required|numeric|min:1',
    ]);

    
    $loanAmount = $validatedData['loan_amount'];
    $annualInterestRate = $validatedData['annual_interest_rate'];
    $loanTerm = $validatedData['loan_term'];

    $monthlyInterestRate = ($annualInterestRate / 100) / 12;
    $numberOfMonths =  $loanTerm * 12 ;

    // Basic monthly payment calculation
    $monthlyPayment = ($loanAmount * $monthlyInterestRate) / (1 - pow((1 + $monthlyInterestRate), -$numberOfMonths));
    
    $loan = Loan::create([
        'loan_amount' => $loanAmount,
        'annual_interest_rate' => $annualInterestRate,
        'loan_term' => $loanTerm,
        'monthly_payment' => $monthlyPayment,
    ]);
    
    return view('monthly-payment-result',[
        'loan_id' => $loan->id,
        'monthly_payment' => $loan->monthly_payment
    ]);
    
}

}