@extends("app")

@section("content")
<div class="mt-5 page-component monthly_payment_div">
    <span class="monthly-payment text-600">Monthly Payment: <b>${{ number_format($monthly_payment,2) }}</b></span>
    <div class="mt-2 amortization-schedule-actions">

        <!--    <a href="{{route('generate_amortization_schedule')}}" class="mt-3 btn btn-primary"
            style="text-decoration: none; color: white; font-weight: 500;"></a> -->


        <form class="" action="{{ route('generate_amortization_schedule') }}" method="POST">
            @csrf
            <div class="hidden" hidden>
                <input type="text" class="form-control" name="loan_id" value="{{ $loan_id }}">
            </div>

            <div class=" mt-3 d-flex justify-content-center" style="width: 100%;">
                <button type="submit" class="action-btn btn btn-primary" style="width:200px;">Amortization</button>
                <a href="{{route('home')}}" class="action-btn btn btn-secondary"
                    style="text-decoration: none; color: white;">
                    Clear</a>
            </div>
        </form>
    </div>
</div>

@endsection