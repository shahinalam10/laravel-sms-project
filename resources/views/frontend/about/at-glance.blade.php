@extends('frontend.master')
@section('title')
    At a glance
@endsection
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark"><h5 class="text-white">At a glance</h5></div>
                    <div class="card-body">
                        <img src="{{asset('frontendAsset')}}/img/school/glance.jpg" class="img-fluid" alt="school">
                    </div>
                    <div class="card-footer">
                        safasf
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div style="text-align: end">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
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
