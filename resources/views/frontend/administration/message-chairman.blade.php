@extends('frontend.master')
@section('title')
    Message of chairman
@endsection
@section('content')
    <div class="row p-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-white border-none">
                    <img class="img-fluid" src="{{asset('frontendAsset')}}/img/team-3.jpg" alt="" style="height:230px; width: 220px">
                    <h4>Message of chairman</h4>
                </div>
                <div class="card-body">
                    orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
        </div>
    </div>

@endsection
