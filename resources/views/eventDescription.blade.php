
@extends('master')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                    {{-- <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;"> --}}
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">{{ $event->location }}</div>
                    <h1 class="display-6 mb-5">{{ $event->name }}</h1>
                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <p class="text-dark mb-2">
                            {{-- {{ $event->description }} --}}
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti aut vel facilis iste ipsam voluptates laborum dolor? Dicta suscipit voluptates, consectetur accusantium sequi placeat obcaecati fugiat eius pariatur id accusamus.
                        </p>
                        <span class="text-primary">{{ explode(' ',$event->date)[0] }}</span>
                    </div>
                    <p class="mb-5">
                        
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a class="btn btn-primary py-2 px-3 me-3" href="">
                        تبرع الآن
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    <a class="btn btn-outline-primary py-2 px-3" href="/register">
                        التسجيل كمتطوع
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection