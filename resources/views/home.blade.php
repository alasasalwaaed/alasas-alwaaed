@extends('layouts.app')

@section('title', 'Al Assas Al Waaed')

@section('content')

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-1" id="mainNav">

        <div class="container">

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#contact">اٍتصل بنا</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">مشاريعنا </a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">خدماتنا</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">من نحن</a></li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href=""> ________________________________________________________________</a>




        </div> <!-- Close navbar container here -->
        <a class="navbar-brand" href="#page-top">
            شركة الاساس الواعد للمقاولات العامة والاستثمار العقاري</a>
        <img src="{{ asset('assets/img/freepik_br_4069bb01-6c9e-44ac-a9e8-2bb01e82fc14.png') }}" alt="Logo" height="120">

    </nav> <!-- Close nav here -->

    <!-- Add missing #about section -->






    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">اللأساس الواعد<br> السبيل الأرقى للنهوض بالمعمار</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">شركة الأساس الواعد رائدة في مجال الأشغال العامة والاستثمار العقاري، تقدم
                        حلولاً مبتكرة ومتكاملة لبناء مشاريع عالية الجودة تواكب تطلعات عملائها."</p> <a
                        class="btn btn-primary btn-xl" href="#about">اٍكتشف المزيد</a>
                </div>
            </div>
        </div>
    </header> <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">

                    <div class="about-card mx-auto">
                        <h2 class="text-white mt-0">من نحن</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-0" py-5>
                            شركة الأساس الواعد للأشغال العامة والاستثمار العقاري هي شركة متخصصة في
                            مجال المقاولات والبناء، تعمل على تنفيذ المشاريع السكنية والتجارية وفق أعلى معايير الجودة.
                            تأسست الشركة بتاريخ 10/06/2021، ويقع مقرها في الزاوية الغرب، وتعمل تحت إدارة المدير العام
                            أحمد عبد الله شناك. تعتمد الشركة على فريق عمل محترف وتسعى إلى تقديم حلول هندسية متكاملة
                            تجمع بين الدقة في التنفيذ والابتكار في التصميم، مع الالتزام بالمواعيد ورضا العملاء.
                            يبلغ رأس مال الشركة 2,560,000 دينار ليبي، مما يعكس متانتها المالية وقدرتها على إنجاز مشاريع
                            تلبي متطلبات السوق وتواكب التطور في قطاع المقاولات والاستثمار العقاري.
                        </p>
                    </div>


                    <!-- Manager Image -->
                    <div class="mb-4">
                        <img src="{{ asset('assets/img/manager.jpg') }}" alt="المدير العام أحمد عبد الله شناك"
                            class="rounded-circle shadow" width="140" height="140">
                        <h5 class="text-white mt-3 mb-0">أحمد عبد الله شناك</h5>
                        <small class="text-white-50">المدير العام</small>
                    </div>



                    <h3 class="text-center text-white mt-5 mb-4">الهيكل الوظيفي والكوادر البشرية بالشركة</h3>

                    <div class="staff-flex">
                        <div class="staff-card">
                            <i class="bi bi-building"></i>
                            <span>مهندس مدني (موقع)</span>
                            <strong>05</strong>
                        </div>

                        <div class="staff-card">
                            <i class="bi bi-file-earmark-text"></i>
                            <span>مهندس مدني (مكتب)</span>
                            <strong>01</strong>
                        </div>

                        <div class="staff-card">
                            <i class="bi bi-diagram-3"></i>
                            <span>مدير مشروع</span>
                            <strong>02</strong>
                        </div>

                        <div class="staff-card">
                            <i class="bi bi-check-circle"></i>
                            <span>مهندس جودة</span>
                            <strong>01</strong>
                        </div>

                        <div class="staff-card">
                            <i class="bi bi-shield-check"></i>
                            <span>مهندس سلامة مهنية</span>
                            <strong>01</strong>
                        </div>

                        <div class="staff-card">
                            <i class="bi bi-compass"></i>
                            <span>مهندس مساحة</span>
                            <strong>06</strong>
                        </div>

                        <div class="staff-card">
                            <i class="bi bi-lightning-charge"></i>
                            <span>مهندس كهرباء</span>
                            <strong>01</strong>
                        </div>

                        <div class="staff-card">
                            <i class="bi bi-tools"></i>
                            <span>فنيون</span>
                            <strong>12</strong>
                        </div>

                        <div class="staff-card">
                            <i class="bi bi-person-badge"></i>
                            <span>مدير تنفيذي</span>
                            <strong>01</strong>
                        </div>

                        <div class="staff-card">
                            <i class="bi bi-calculator"></i>
                            <span>محاسبون</span>
                            <strong>03</strong>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container services-container">
            <div class="text-center mb-5">
                <h2 class="section-title">تعرف على خدماتنا</h2>
                <hr class="divider" />
            </div>

            <div class="services-cards">
                <div class="service-card">
                    <i class="bi-gem"></i>
                    <h3>الأشغال العامة والبناء</h3>
                    <p>تنفيذ مشاريع البناء والتشييد عالية الجودة</p>
                </div>

                <div class="service-card">
                    <i class="bi-laptop"></i>
                    <h3>التصميم الهندسي والاستشارات</h3>
                    <p>تقديم حلول هندسية مبتكرة ودراسة مشاريع متكاملة</p>
                </div>

                <div class="service-card">
                    <i class="bi-globe"></i>
                    <h3>الاستثمار العقاري وتطوير المشاريع</h3>
                    <p>تطوير عقارات سكنية وتجارية واستثمارية مميزة</p>
                </div>

                <div class="service-card">
                    <i class="bi-heart"></i>
                    <h3>إدارة المشاريع وضمان الجودة</h3>
                    <p>متابعة التنفيذ بدقة وضمان التزام المعايير والمواصفات</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to action-->
    <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">مقتطفات من انجازاتنا</h2>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/1.jpg') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/1.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">اٍسم المشروع</div>
                            <div class="project-name">تنفيذ كوبري جسر السلام بالخمس</div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/2.jpg') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/2.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">اٍسم المشروع</div>
                            <div class="project-name">صيانة الطريق الساحلي الزاوية</div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/3.jpg') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/3.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">اٍسم المشروع</div>
                            <div class="project-name">صيانة الطريق الساحلي صبراتة</div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    </section> <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container contact-container">
            <div class="text-center mb-5">
                <h2 class="section-title">اٍتصل بنا</h2>
                <hr class="divider" />
                <p class="text-muted">عش التجربة مع شركة الأساس الواعد</p>
            </div>

            <div class="contact-cards">
                <div class="contact-card">
                    <i class="bi-phone"></i>
                    <h4>الهاتف</h4>
                    <p>(+218) 0917333948</p>
                </div>

                <div class="contact-card">
                    <i class="bi-house"></i>
                    <h4>العنوان</h4>
                    <p>الزاوية الغرب</p>
                </div>

                <div class="contact-card">
                    <i class="bi-envelope"></i>
                    <h4>البريد الإلكتروني</h4>
                    <p>alassasselwaeed@outlook.com</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">جميع الحقوق محفوظة 2026&copy; شركة الاساس الواعد للمقاولات العامة
                والاستثمار العقاري </div>
        </div>
    </footer> <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *--> <!-- * * SB Forms JS * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


@endsection