@extends('frontend.master')
@section('title')
    Academic Calendar
@endsection
@section('content')
    <div class="container-fluid">
        <div class="col-md-12 bg-dark text-center">
            <h4 class="text-white py-2">Admission Circular</h4>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                </ol>
            </nav>
        </div><br>
        <div class="row p-3">
            <div class="col-md-8">
                <img src="{{asset('frontendAsset')}}/img/school/why-1.jpg" class="img-fluid" alt="picutre">
            </div>
            <div class="col-md-4">
                <div class="card-header bg-dark"><h6 class="text-white">Related topics</h6></div><br>
                <ul class="list-group">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

