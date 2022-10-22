     <!-- Navbar Start -->
     
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand">
                <img src="{{ asset('images/hand.png') }}" alt="" style="width:60%; height:auto;">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="#" class="nav-item nav-link active">الصفحة الرئيسية</a>
                    <a href="#" class="nav-item nav-link">الفعاليات</a>
                    <a href="#" class="nav-item nav-link">حول الموقع</a>
                    <a href="#" class="nav-item nav-link">اتصل بنا</a>
                    
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="">
                        تبرع الآن
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-left"></i>
                        </div>
                    </a></div>
                    @if (Auth::user())
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="profile">
                        حسابي
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-user"></i>
                        </div>
                    </a></div>
                    <div class="d-none d-lg-flex ms-2">
                        <a class="btn btn-outline-primary py-2 px-3" href="logout">
                            تسجيل الخروج
                        </a></div>
 @endif
                </div>
            </div>
        </nav>

 <!-- Navbar Start -->
 <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
        </div>

    </div>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <img src="{{ asset('images/hand.png') }}" alt="" style="width:55%; height:auto;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#" class="nav-item nav-link active">الصفحة الرئيسية</a>
                <a href="#" class="nav-item nav-link">الفعاليات</a>
                <a href="#" class="nav-item nav-link">حول الموقع</a>
                <a href="#" class="nav-item nav-link">اتصل بنا</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-outline-primary py-2 px-3" href="">
                    تبرع الآن
                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                        <i class="fa fa-arrow-left"></i>
                    </div>
                </a></div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-outline-primary py-2 px-3" href="">
                    حسابي
                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                        <i class="fa fa-user"></i>
                    </div>
                </a></div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
