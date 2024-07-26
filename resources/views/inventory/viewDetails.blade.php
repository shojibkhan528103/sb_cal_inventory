@extends('inventory.simpleInventory')
@section('account')
    <div>
        <span id="income" class="border rounded btn btn-outline-primary" href="#">Income</span>
        <span id="expense" class="border rounded btn btn-outline-primary" href="#">Expense</span>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="card text-center">
        <div class="card-header border rounded mb-2">
            <h4>All Histoy of Inventoy</h4>
        </div>

        {{-- income history  --}}
        {{-- <div id="showIncome"> --}}
        <div>
            <div class="card-header border rounded mb-2">
                <h4>Income history :</h4>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <th>SL</th>
                        <th>date</th>
                        <th>created_at</th>
                        <th>Total income</th>
                        <th>Income source</th>
                        <th>Discriotion</th>
                        <th>Payment Type</th>
                        <th>Action</th>
                    </thead>

                    @forelse ($income as $incomedata)
                        <tbody>
                            <tr>
                                <td>{{ $incomedata->id }}</td>
                                <td>{{ $incomedata->date }}</td>
                                <td>{{ $incomedata->created_at }}</td>
                                <td>{{ $incomedata->amound }}</td>
                                <td>{{ $incomedata->incomesource }}</td>
                                <td>{{ $incomedata->discripition }}</td>
                                <td>{{ $incomedata->paymenttype }}</td>
                                <td>
                                    <a class="border rounded btn btn-outline-primary" href="{{ route('income.edit', ['id' =>$incomedata->id]) }}">Edit</a>
                                    <a class="border rounded btn btn-outline-primary" href="{{ route('income.delete', ['id' =>$incomedata->id]) }}">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    @empty
                        <tbody>
                            <tr>
                                <td>{{ 'No data found' }}</td>
                            </tr>
                        </tbody>
                    @endforelse
                </table>
            </div>
        </div>

        {{-- expense history  --}}
        {{-- <div id="showExpense"> --}}
        <div>
            <div class="card-header border rounded mb-2">
                <h4>Expense History:</h4>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <th>SL</th>
                        <th>date</th>
                        <th>Total Expense</th>
                        <th>Expense source</th>
                        <th>Discriotion</th>
                        <th>Payment Type</th>
                        <th>Action</th>
                    </thead>
                    @forelse ($expense as $expensedata)
                        <tbody>
                            <tr>
                                <td>{{ $expensedata->id }}</td>
                                <td>{{ $expensedata->date }}</td>
                                <td>{{ $expensedata->ex_amound }}</td>
                                <td>{{ $expensedata->expensesource }}</td>
                                <td>{{ $expensedata->discripition }}</td>
                                <td>{{ $expensedata->paymenttype }}</td>
                                <td>
                                    <a class="border rounded btn btn-outline-primary" href="{{ route('expense.edit', ['id' =>$expensedata->id]) }}">Edit</a>
                                    <a class="border rounded btn btn-outline-primary" href="{{ route('expense.delete', ['id' =>$expensedata->id]) }}">Delete</a>
                                </td>

                            </tr>
                        </tbody>

                    @empty
                        <tbody>
                            <tr>
                                <div><img src="{{ asset('img/nodata.gif') }}" alt="logo"></div>
                            </tr>
                        </tbody>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#income").click(function() {
                $("#showIncome").toggle();
            });
        });
    </script>
@endsection
