<?php

namespace App\Http\Controllers;

use App\Models\ExtraRepaymentSchedule;
use App\Http\Requests\StoreExtraRepaymentScheduleRequest;
use App\Http\Requests\UpdateExtraRepaymentScheduleRequest;
use Illuminate\Http\Request;

class ExtraRepaymentScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreExtraRepaymentScheduleRequest $request)
    {
        $extra_repayment_schedule = new ExtraRepaymentSchedule();

        $extra_repayment_schedule->month_number = $request->month_number;
        $extra_repayment_schedule->starting_balance = $request->starting_balance;
        $extra_repayment_schedule->monthly_payment = $request->monthly_payment;
        $extra_repayment_schedule->principal = $request->principal;
        $extra_repayment_schedule->interest = $request->interest;
        $extra_repayment_schedule->extra_repayment = $request->extra_repayment;
        $extra_repayment_schedule->ending_balance = $request->ending_balance;
        $extra_repayment_schedule->remaining_loan_term = $request->remaining_loan_term;

        $extra_repayment_schedule->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(ExtraRepaymentSchedule $extraRepaymentSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExtraRepaymentSchedule $extraRepaymentSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExtraRepaymentScheduleRequest $request, ExtraRepaymentSchedule $extraRepaymentSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExtraRepaymentSchedule $extraRepaymentSchedule)
    {
        //
    }
}
