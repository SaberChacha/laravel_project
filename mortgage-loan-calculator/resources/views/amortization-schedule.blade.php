@extends("app")

@section("content")
<div class="mt-5 ">
    @include("amortization-header")
    <table class="table table-striped table-bordered mt-3">
        <thead class="thead-light">
            <tr>
                <th>Month number</th>
                <th>Starting balance</th>
                <th>Monthly payment</th>
                <th>Principal</th>
                <th>Interest</th>
                <th>Ending balance</th>
                @isset($extra_repayment)
                <th>Remaining term</th>
                @endisset
            </tr>
        </thead>
        <tbody>
            @foreach ($amortization_data as $item)
            <tr>
                <td>{{ number_format($item["month_number"],) }}</td>
                <td>{{ number_format($item["starting_balance"],2) }}</td>
                <td>{{ number_format($item["monthly_payment"],2) }}</td>
                <td>{{ number_format($item["principal"],2) }}</td>
                <td>{{ number_format($item["interest"],2) }}</td>
                <td>{{ number_format($item["ending_balance"],2) }}</td>
                @isset($extra_repayment)
                <td>{{ number_format($item["remaining_loan_term"]) }}</td>
                @endisset

            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection