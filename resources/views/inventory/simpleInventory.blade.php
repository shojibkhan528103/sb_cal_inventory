@extends('layout.frontend_app')
@section('calculator', 'calculator')
@section('frontendContain')
    <div class="container mt-3">
        <div class="d-flex justify-content-center border rounded shadow mb-4">
            <h3>simple Inventory</h3>
        </div>

        <div class="row mt-1 border rounded shadow gap-5">
            <div class="col-5 m-2 p-2 border rounded shadow">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('inventory.calculate')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('view.details')}}">View Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('simple.calcolator') }}">Calculator</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">simple inventory system</h5>
                        <button type="button" class="btn btn-success btn-lg"><a class="text-decoration-none text-white" href="{{route('inventory.income')}}">Income</a></button>
                        <button type="button" class="btn btn-danger btn-lg"><a class="text-decoration-none text-white" href="{{route('inventory.expense')}}">Expense</a></button>
                        <button type="button" class="btn btn-warning btn-lg"><a class="text-decoration-none text-white" href="{{route('inventory.overview')}}">Over view</a></button>
                        <a href="#" class="btn btn-primary mt-5">Go Home</a>
                    </div>
                </div>
            </div>
            <div class="col-6 border rounded shadow m-2 p-2">

                @yield('account')

            </div>
        </div>
    </div>
@endsection
