@extends('frontend.master')
@section('title')
    Why study SHS
@endsection
@section('content')
    <Section class="container-fluid p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="row bg-warning py-2">
                    <div class="col-7">
                            why study in SHS
                    </div>
                    <div class="col-5">
                        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('frontendAsset')}}/img/school/why-1.jpg" class="img-fluid" alt="students">
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('frontendAsset')}}/img/school/why-2.jpg" class="img-fluid" alt="students">
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('frontendAsset')}}/img/school/why-3.jpg" class="img-fluid" alt="students">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                   <p class="p-4">
                       1. We provide quality & modern education with world class infrastructure,beautiful location and clean environment.<br>

                       2.We ensure execution of expected curriculum ,attractive accumulation  of present demand ,attracting high  qualified and  well trained teachers and result based adoption of modern facilities.<br>

                       3.We ensure wide spread practise of cocurriculum activities to inspire students implementing their creativity and imagination.<br>

                       4.We have well secured campus inside the cantonment  and round the clock security system with CCTV cameras<br>

                       5.We closely maintain and supervise the grooming up of every student with great care.<br>

                       6.We put importance on ethical,morality,customs,etiquettes and courtesy  development of students as an ideal citizen of the country.<br>

                       7.We prepare our students to become expert in social ,academic ,physical  and mental aspect.<br>
                   </p>
                </div>
            </div>
        </div>
    </Section>
@endsection
