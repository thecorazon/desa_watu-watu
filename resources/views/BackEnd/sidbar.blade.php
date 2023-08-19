<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{url('/')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>User</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('/userform')}}" class="dropdown-item">User Form</a>
                    <a href="{{url('/userlist')}}" class="dropdown-item">User List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-handbag-fill me-2"></i>Product</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Product Form</a>
                    <a href="typography.html" class="dropdown-item">Product List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-credit-card-fill  me-2"></i>CMS</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('/cmsFormLink')}}" class="dropdown-item">CMS Form</a>
                    <a href="{{url('/cmsLitLink')}}" class="dropdown-item">CMS List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-question-diamond-fill me-2"></i>About</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('About/Form')}}" class="dropdown-item">About Form</a>
                    <a href="{{route('About/List')}}" class="dropdown-item">About List</a>
                    <a href="{{route('Force/list')}}" class="dropdown-item">About Force List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-emoji-smile-fill me-2"></i>About Slider</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('Abhout/Slider/Form')}}" class="dropdown-item">About Slider Form</a>
                    <a href="{{route('Abhout/Slider/List')}}" class="dropdown-item">About Slider List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-journal-check me-2"></i>Courses</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('Courses.Form')}}" class="dropdown-item">Courses Form</a>
                    <a href="{{route('Courses.List')}}" class="dropdown-item">Courses List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-file-earmark-font me-2"></i>Traners</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('Trainer/Form')}}" class="dropdown-item">Traner Form</a>
                    <a href="{{route('Trainer/List')}}" class="dropdown-item">Traner List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-puzzle-fill me-2"></i>Events</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('Event/Form')}}" class="dropdown-item">Events Form</a>
                    <a href="{{route('Event/List')}}" class="dropdown-item">Events List</a>
                    <a href="{{route('Events/Trash')}}" class="dropdown-item">Trash List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-puzzle-fill me-2"></i>Pricing</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('Event/Form')}}" class="dropdown-item">Pricing Form</a>
                    <a href="{{route('Event/List')}}" class="dropdown-item">Pricing List</a>
                    <a href="{{route('Events/Trash')}}" class="dropdown-item">Pricing List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-view-list me-2"></i>Banner</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('/BannerForm')}}" class="dropdown-item">Banner Form</a>
                    <a href="{{url('/Listlink')}}" class="dropdown-item">Banner List</a>
                </div>
            </div>
           
            
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->