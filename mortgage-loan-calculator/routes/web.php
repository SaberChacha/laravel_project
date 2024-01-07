<?php

use App\Http\Controllers\AmortizationHeaderController;
use App\Http\Controllers\MonthlyPaymentController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MortgageLoanCalculatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', [MortgageLoanCalculatorController::class, 'index'])->name('home');
    Route::post('/', [MortgageLoanCalculatorController::class, 'calculate'])->name('calculate_monthly_payment');
    Route::post('/generate_amortization_schedule', [MonthlyPaymentController::class, 'generate_amortization_schedule'] )->name('generate_amortization_schedule');