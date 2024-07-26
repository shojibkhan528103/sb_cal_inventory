@extends('inventory.simpleInventory')
@section('account')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <div class="d-flex justify-content-center border rounded shadow mb-4">
        <h3>Add income</h3>
    </div>

    <form class="mt-4" action="{{route('inventory.store')}}" method="POST">
        @csrf
        <div class="mb-3 row ">
            <label for="firstNumber" class="form-label col-sm-3">Date:</label>
            <div class="col-sm-9">
                <input type="date" class="form-control" name="date" required>
            </div>
        </div>
        <div class="mb-3 row ">
            <label for="secondNumber" class="form-label col-sm-3">Amount:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="amound" required>
            </div>
        </div>
        <div class="mb-3 row ">
            <label for="incomesource" class="form-label col-sm-3">income source:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="incomesource" required>
            </div>
        </div>
        <div class="mb-3 row ">
            <label for="incomesource" class="form-label col-sm-3">Discrition:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="discripition" required>
            </div>
        </div>
        <div class="mb-3 row ">
            <label for="Operator" class="form-label col-sm-3">Payment Tye</label>
            <div class="col-sm-9">
                <select class="form-select"name="paymenttype" required>
                    <option>select One</option>
                    <option value="Cash">Cash</option>
                    <option value="Bkash">Bkash</option>
                    <option value="Nogot">Nogot</option>
                    <option value="Rocket">Rocket</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-3"></div>
            <div class="col-sm-6 d-flex-justify-content-center">
                <button
                    type="submit"class="form-control btn btn-outline-primary d-flex justify-content-center"><span>Submit</span></button>
            </div>
            <div class="col-3"></div>

        </div>
    </form>
    {{-- <div class="justify-content-center d-flex">
        <a class="btn btn-outline-success border rounded shadow" href="{{ route('simple.calcolator') }}">Save</a>
        <a class="btn btn-outline-primary border rounded shadow" href="{{ route('simple.calcolator') }}">Update</a>
        <a class="btn btn-outline-danger border rounded shadow" href="{{ route('simple.calcolator') }}">delete</a>
        <a class="btn btn-outline-warning border rounded shadow" href="{{ route('simple.calcolator') }}">Cancel</a>
    </div> --}}
@endsection
