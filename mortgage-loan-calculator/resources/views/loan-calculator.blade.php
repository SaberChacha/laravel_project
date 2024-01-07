@extends('app')

@section('content')



<form class="mt-5 page-component loan-calculator-form" action="{{ route('calculate_monthly_payment') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="loanAmount" class="col-md-4 col-form-label">Loan Amount</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="loan_amount">
            @error('loanAmount')
            <div class="text-red-500 text-sm text-danger">{{ $message }}</div>
            @enderror
        </div>


    </div>
    <div class="form-group row">
        <label for="annualInterestRate" class="col-md-4 col-form-label">Annual Interest Rate %</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="annual_interest_rate">
            @error('annualInterestRate')
            <div class="text-red-500 text-sm text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="loanTerm" class="col-md-4 col-form-label">Loan Term (in years)</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="loan_term">
            @error('loanTerm')
            <div class="text-red-500 text-sm text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="d-flex justify-content-end actions-container">
        <div class="d-flex actions">
            <a href="{{route('home')}}" class=" action-btn btn btn-secondary"
                style="text-decoration: none; color: white;">
                Clear</a>
            <button type="submit" class="action-btn btn btn-primary">Calculate</button>
        </div>
    </div>

</form>





@endsection