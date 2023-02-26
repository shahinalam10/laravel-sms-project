<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{route('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="{{asset('frontendAsset')}}/img/logo/logo.jpg">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('/')}}" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{route('at-glance')}}" class="dropdown-item">At a glance</a>
                    <a href="{{route('why-study-shs')}}" class="dropdown-item">Why study in SHS</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Administration</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{route('message-minister')}}" class="dropdown-item">message of minister</a>
                    <a href="{{route('message-secretary')}}" class="dropdown-item">message of secretary</a>
                    <a href="{{route('message-chairman')}}" class="dropdown-item">Message of chairman</a>
                    <a href="{{route('message-headmaster')}}" class="dropdown-item">Message of Headmaster</a>
                    <a href="{{route('teacher-info')}}" class="dropdown-item">Teacher information</a>
                    <a href="{{route('staff-info')}}" class="dropdown-item">Staff information</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Academic</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{route('academic-calender')}}" class="dropdown-item">Academic calender</a>
                    <a href="{{route('class-routine')}}" class="dropdown-item">Class routine</a>
                    <a href="{{route('syllabus')}}" class="dropdown-item">syllabus & book list </a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admission</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{route('admission-circular')}}" class="dropdown-item">Admission circular</a>
                    <a href="#" class="dropdown-item">Admission form</a>
                    <a href="#" class="dropdown-item">Admission result</a>
                    <a href="#" class="dropdown-item">prospectus</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Facilities</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{route('media-class')}}" class="dropdown-item">Multimedia classroom</a>
                    <a href="{{route('indore-game')}}" class="dropdown-item">Indore game</a>
                    <a href="{{route('library')}}" class="dropdown-item">Library</a>
                    <a href="{{route('computer-club')}}" class="dropdown-item">Computer club</a>
                    <a href="{{route('science-club')}}" class="dropdown-item">Science club</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{route('photos')}}" class="dropdown-item">Photos</a>
                    <a href="{{route('videos')}}" class="dropdown-item">videos</a>

                </div>
            </div>
            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>

            <button class="btn btn-gray nav-item nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-user-shield"> &nbsp;</i></button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="wrapper bg-white">
                        <div class="h3 text-center">Sign in</div>
                        <div class="h6 text-muted text-center pt-2">Enter your login details</div>
                        <form class="pt-3">
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Username or Email Address" required class=""> </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="text" placeholder="Enter your Password" required class=""> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="remember"> <label class="option text-muted"> Remember me <input type="radio" name="radio"> <span class="checkmark"></span> </label> </div>
                                <div class="ml-auto"> <a href="#" id="forgot">Forgot Password?</a> </div>
                            </div> <button class="btn btn-block text-center my-3">Log in</button>
                            <div class="text-center pt-3 text-muted">Not a member? <a href="{{route('student-signup')}}">Sign up</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-3 d-none d-lg-block">
            <img src="{{asset('frontendAsset')}}/img/logo/suborno.png" style="height: 70px; width: 100px">
        </div>
{{--        <a href="" style="background-color: #d50321" class="btn py-4 px-lg-4 d-none d-lg-block"><i style="font-size: 18px;color: white" class="fa-solid fa-right-to-bracket "></i></a>--}}
{{--        <a href="" style="background-color: #d50321" class="btn py-4 px-lg-4 d-none d-lg-block"><i style="font-size: 18px;color: white" class="fa-solid fa-user-plus"></i></a>--}}
    </div>
</nav>
<!-- Navbar End -->
