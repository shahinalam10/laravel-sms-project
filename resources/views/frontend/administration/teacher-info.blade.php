@extends('frontend.master')
@section('title')
    Teacher information
@endsection
@section('content')
    <section class="container-fluid">
        <div class="col-md-12 bg-dark text-center">
            <h4 class="text-white py-2">Teacher info</h4>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                </ol>
            </nav>
        </div>
        <div class="row p-5">
            <div class="col-md-8">
                <div class="row bg-dark">
                    <div class="col-3">
                        <img src="{{asset('frontendAsset')}}/img/teachers/tec-1.jpg" alt="teacher" class="img-fluid" style="height: 150px">
                    </div>
                    <div class="col-9">col-4</div>
                </div><br>
                <div class="row bg-dark">
                    <div class="col-3">
                        <img src="{{asset('frontendAsset')}}/img/teachers/tec-2.jpg" alt="teacher" class="img-fluid" style="height: 150px">
                    </div>
                    <div class="col-9">col-4</div>
                </div><br>
            </div>
            <div class="col-md-4">
                    <table class="table table-bordered table-hover">
                        <tbody>
                        <div class="card-header bg-dark"><h5 class="text-white">History</h5></div><br>
                        <tr>
                            <td>Glorious begining</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Row 2, Column 1</td>
                            <td>Row 2, Column 2</td>
                        </tr>
                        <tr>
                            <td>Row 3, Column 1</td>
                            <td>Row 3, Column 2</td>
                        </tr>
                        </tbody>
                    </table>
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
    </section>
@endsection

