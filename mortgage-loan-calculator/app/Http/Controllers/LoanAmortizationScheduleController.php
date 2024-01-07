<?php

namespace App\Http\Controllers;

use App\Models\LoanAmortizationSchedule;
use App\Http\Requests\StoreLoanAmortizationScheduleRequest;
use App\Http\Requests\UpdateLoanAmortizationScheduleRequest;

class LoanAmortizationScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function indexLoanAmortizationSchedule(){
        // $amortization_schedule= LoanAmortizationSchedule::where('loan_id', $loan_id)->get();
        // return view('loan_amortization_schedule', compact('amortization_schedule'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLoanAmortizationScheduleRequest $request)
    {
        $amortization_schedule = new LoanAmortizationSchedule();
 
        $amortization_schedule->month_number = $request->month_number;
        $amortization_schedule->starting_balance = $request->starting_balance;
        $amortization_schedule->monthly_payment = $request->monthly_payment;
        $amortization_schedule->principal = $request->principal;
        $amortization_schedule->interest = $request->interest;
        $amortization_schedule->ending_balance = $request->ending_balance;
 
        $amortization_schedule->save();
 
    }

    /**
     * Display the specified resource.
     */
    public function show(LoanAmortizationSchedule $loanAmortizationSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LoanAmortizationSchedule $loanAmortizationSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLoanAmortizationScheduleRequest $request, LoanAmortizationSchedule $loanAmortizationSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoanAmortizationSchedule $loanAmortizationSchedule)
    {
        //
    }
}