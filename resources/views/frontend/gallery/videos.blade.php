@extends('frontend.master')
@section('title')
    Academic Calendar
@endsection
@section('content')
    <div class="container-fluid">
        <div class="col-md-12 bg-dark text-center">
            <h4 class="text-white py-2">Videos gallery</h4>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                </ol>
            </nav>
        </div><br>
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>
            </div>
        </div>
    </div>
@endsection

