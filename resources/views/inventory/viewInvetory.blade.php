@extends('inventory.simpleInventory')
@section('account')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="card text-center">
        <div class="card-header border rounded mb-2">
            <h4>Total Transition</h4>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                    <th>SL</th>
                    <th>Total income</th>
                    <th>total Expense</th>
                    <th>Balance</th>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>{{$income}}</td>
                        <td>{{$expense}}</td>
                        <td>{{$balance}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
