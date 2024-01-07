<div class="amortization-header page-component">
    <div class="row">
        <span class="col-md-4">Loan Amount</span>
        <span class="col-md-8">{{$loan["loan_amount"]}}</span>
    </div>
    <div class="row">
        <span class="col-md-4">Annual Interest Rate %</span>
        <span class="col-md-8"> {{$loan["annual_interest_rate"]}}</span>
    </div>
    <div class="row">
        <span class="col-md-4">Loan Term</span>
        <span class="col-md-8"> {{$loan["loan_term"]}} years</span>
    </div>
    @isset($loan['extra_payment'])
    <div class="row">
        <span class="col-md-4">Extra Payment</span>
        <span class="col-md-8"> {{$extraPayment}}</span>
    </div>
    <div class="row">
        <span class="col-md-4">Effective Interest Rate</span>
        <span class="col-md-8"> {{$effectiveInterestRate}}</span>
    </div>
    @endisset

    <div class=" mt-3 d-flex justify-content-end">
        <a href="{{route('home')}}" class="action-btn btn btn-secondary" style="text-decoration: none; color: white;">
            Clear</a>
        <button class="action-btn btn btn-primary extra-payment-btn" onclick="on()" id="extra-payment-btn">Extra
            Payment</button>
    </div>

    <div id="overlay" onclick="off()"></div>
    <div id="myModal" class="extra-payment-modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="off()">&times;</span>
            </div>
            <div class="modal-body">
                <form class="" action="{{ route('extra_repayment_schedule') }}" method="POST">
                    @csrf
                    <div class="form-group row mt-2">
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="extra_payment"
                                placeholder="Extra Payment Amount">
                            @error('extraPayment')
                            <div class="text-red-500 text-sm text-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" name="loan_id" value="{{$loan['id']}}" hidden>
                        </div>
                        <button type="submit" class="btn btn-primary col-md-4 col-form-label"
                            style="height: 38px;">Calculate</button>
                    </div>



                </form>
            </div>

        </div>

    </div>


</div>

<script>
function on() {
    $("#overlay").fadeIn(150);
    $("#myModal").fadeIn(150);
}

function off() {
    $("#overlay").fadeOut(150);
    $("#myModal").fadeOut(150);
}
</script>