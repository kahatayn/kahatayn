
@extends('master')

@section('content')
    <!-- Page Header Start -->
    <div
      class="container-fluid page-header mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          تـواصـل معـنـا
        </h1>
        <!-- <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              تـواصـل معنـا
            </li>
          </ol>
        </nav> -->
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <div
              class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3"
            >
              تـواصـل معنـا
            </div>
            <h3 class="display-9 mb-3">
              إذا كان لديك أي أسئلة أو تعليقات أو اقتراحات أو شكاوى، يرجى
              الاتصال بنا على العناوين التالية:
            </h3>
         
            <h6><i class="fa fa-phone-alt me-3">الهاتف </i></h6>

            <p>+012 345 67890</p>
            <p>+012 345 67890</p>
            <p>+012 345 67890</p>

            <h6><i class="fa fa-envelope me-3">البريد الألكتروني </i></h6>
            <p>info@example.com</p>
            <h4><i class="fa fa-clock me-3">ساعات العمل </i></h4>

            <p>ساعات العمل الأحد – الخميس / 8:00 صباحًا – 4:00 عصرًا.</p>
            <h6><i class="fa fa-map-marker-alt me-3">الموقع</i></h6>
            <p>
              الموقع عمان، الشميساني، شارع الشريف عبد الحميد شرف، بناية رقم 87
              ص. ب. 926405 عمان 11190 الأردن
            </p>
          </div>
          <div
            class="col-lg-6 wow fadeIn"
            data-wow-delay="0.5s"
            style="min-height: 450px"
          >
            <div class="position-relative rounded overflow-hidden h-100">
              <iframe
                class="position-relative w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0"
                style="min-height: 450px; border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->
    @endsection