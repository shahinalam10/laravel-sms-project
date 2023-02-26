@extends('frontend.master')
@section('title')
    Academic Calendar
@endsection
@section('content')
    <div class="container-fluid">
        <div class="col-md-12 bg-dark text-center">
            <h4 class="text-white py-2">School library</h4>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                </ol>
            </nav>
        </div><br>
        <div class="card-body p-2">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('frontendAsset')}}/img/school/why-1.jpg" alt="picutre" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <img src="{{asset('frontendAsset')}}/img/school/why-1.jpg" alt="picutre" class="img-fluid">
                </div>
            </div>
            <div class="card-footer">
                <p>shahin</p>
            </div>
        </div>
    </div>
@endsection

