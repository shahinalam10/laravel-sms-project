@extends('frontend.master')
@section('title')
    Academic Calendar
@endsection
@section('content')
    <div class="container-fluid">
        <div class="col-md-12 bg-dark text-center">
            <h4 class="text-white py-2">Contact</h4>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                </ol>
            </nav>
        </div><br>
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3 p-3">
                <div class="col">
                    <div class="p-3 border bg-light">Address</div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">Contact number</div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">Email address</div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">Website address</div>
                </div>
            </div><br>
            <div class="row p-3">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1493.3078327222263!2d90.42401235100766!3d23.09880423329271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375511a372ce0249%3A0x70a7d737e1d1a8dc!2sSamantasar%20High%20School!5e1!3m2!1sen!2sbd!4v1676999848643!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Subject</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="write your subject">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Write message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="write your message"></textarea>
                    </div>
                    <button type="submit" value="submit" class="btn btn-success px-5">submit</button>
                </div>
            </div>
    </div>
@endsection

