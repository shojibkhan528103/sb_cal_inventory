@extends('inventory.simpleInventory')
@section('calculator', 'calculator')
@section('account')
    <div class="container">
        <div class="row mt-5">
            <div class="col-3"></div>
            <div class="col-6 border rounded shadow">
                <div class="d-flex justify-content-center border rounded shadow mb-4">
                    <h3>simple calculator</h3>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="mt-4" action="{{ route('simple.calcolate') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="firstNumber" class="form-label">Inter first number</label>
                        <input type="number" class="form-control" name="firstNumber"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="secondNumber" class="form-label">Inter second number</label>
                        <input type="number" class="form-control" name="secondNumber"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="Operator" class="form-label" >Inter Operator</label>
                        <select class="form-select"name="opetator" required>
                            <option>select One</option>
                            <option value="+">Plus</option>
                            <option value="-">Minus</option>
                            <option value="/">Divition</option>
                            <option value="*">Multiplication</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="number" class="form-control btn btn-outline-primary d-flex justify-content-center"><span>Submit</span> </button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection
