<!DOCTYPE html>
<html lang="ar">

<head>
    <title>موقع معلم الحاسب</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="front/images/1part-1-296x319.png">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="front/css/style.css">
    <link rel="stylesheet" href="front/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
          integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid px-md-5  pt-3 pt-md-4 ">
    <!-- Header start -->
    <div class="row justify-content-between">
        <div class="col-md-8 order-md-last">
            <div class="row">
                <div class="col-md-6 text-center">
                    <a class="navbar-brand" href="index-2.html">
                        موقع <span>معلم الحاسب </span>
                        <small>لكل ما يحتاجه المعلم</small>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="social-media">
                <p class="mb-0 d-flex">
                    @forelse($socialMediads as $socialMediad)
                        <a href="{{$socialMediad->url}}" class="d-flex align-items-center justify-content-center">
                            <span class="{{$socialMediad->icon}}">
                                <i class="sr-only">{{$socialMediad->name}}</i>
                            </span>
                        </a>
                    @empty
                        <a href="https://twitter.com/mo3alemalhaseb" class="d-flex align-items-center justify-content-center">
                            <span class="fa fa-twitter">
                                <i class="sr-only">twitter</i>
                            </span>
                        </a>
                        <a href="https://telegram.me/mo3alemAlhaseb" class="d-flex align-items-center justify-content-center">
                            <span >
                                <i class="fa fa-telegram" aria-hidden="true"></i>

                                <i class="sr-only">telegram</i>
                            </span>
                        </a>
                        <a href="https://www.instagram.com/mo3alemalhaseb/" class="d-flex align-items-center justify-content-center">
                            <span class="fa fa-instagram">
                                <i class="sr-only">instagram</i>
                            </span>
                        </a>
                        <a href="https://www.youtube.com/channel/UCYy9TelYCFGF-jJxTVXn-0A" class="d-flex align-items-center justify-content-center">
                            <span class="fa fa-youtube">
                                <i class="sr-only">youtube</i>
                            </span>
                        </a>
                    @endforelse
                </p>
            </div>
        </div>
    </div>
    <!-- Header end -->

</div>
<!-- Nav bar Start -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> القائمة
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto" >
                <li class="nav-item active"><a href="index-2.html" class="nav-link">الرئيسية</a></li>
                <li class="nav-item"><a href="https://cmp-tch.com/blog/" class="nav-link">المدونة</a></li>
                <li class="nav-item"><a href="#preparation" class="nav-link">التحضير</a></li>
                <li class="nav-item"><a href="#ouroud" class="nav-link">العروض</a></li>
                <li class="nav-item"><a href="#software" class="nav-link">البرامج</a></li>
                <li class="nav-item"><a href="#tzm" class="nav-link">توزيع المناهج</a></li>
                <li class="nav-item"><a href="#curriculum" class="nav-link">المناهج</a></li>
                <li class="nav-item"><a href="#techguides" class="nav-link">أدلة المعلمين</a></li>
                <li class="nav-item"><a href="https://cmp-tch.com/blog/cone/" class="nav-link">اتصل بنا </a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Nav bar End -->
<!-- image Section start -->
<section class="hero-wrap" style="background-image:linear-gradient(to bottom, rgba(200,121,36, 0.52), rgba(0,0,0, 0.73)),url(front/images/background-image.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-8 ftco-animate d-flex align-items-end">
                <div class="text w-100">
                    <h1 class="mb-4">موقع معلم الحاسب</h1>
                    <p class="mb-4">كل مايحتاجه المعلم</p>
                    <p>
                        <a href="#" class="btn btn-primary py-3 px-5" style="border-radius: 0 25px 25px 0;">اتصل بنا</a>
                        <a href="#" class="btn btn-white py-3 px-5" style="border-radius:  25px 0 0 25px;">المدونة</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- image Section end -->

<!-- preparation Section start -->
<section id="preparation" class="ftco-section p-5">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>التحضير</h2>
            </div>
        </div>
        <div class="row">
            @foreach($preparations as $preparation)
                <div class="col-md-4 d-flex align-items-stretch ftco-animate mt-5">

                    <div class="services-2 text-center">
                        <h2 class="mb-4"><a href="#">{{$preparation->name}}</a></h2>
                        <a href="{{$preparation->url}}" class="btn btn-primary px-md-5 py-2 " > استعراض <span><i class="fa fa-cloud-download" aria-hidden="true"></i>
                     </span> </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- preparation Section end -->
<center>
    {{-- مكان للاعلانات    --}}
</center>
<!-- ouroud Section start -->
<section id="ouroud" class="ftco-counter ftco-section p-5 img bg-light" >
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>العروض التقديمية</h2>
            </div>
        </div>
        <div class="row">
            @foreach($presentations as $presentation)
                <div class="col-md-4 d-flex align-items-stretch ftco-animate mt-5">

                    <div class="services-2 text-center">
                        <h2 class="mb-4"><a href="#">{{$presentation->name}}</a></h2>
                        <a href="{{$presentation->url}}" class="btn btn-primary px-md-5 py-2 " > استعراض <span><i class="fa fa-cloud-download" aria-hidden="true"></i>
                     </span> </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ouroud Section end -->
<!-- software Section start -->
<section id="software" class="ftco-section p-5">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>البرامج</h2>
            </div>
        </div>
        <div class="row">
            @foreach($programs as $program )
                <div class="col-md-3 d-flex align-items-stretch ftco-animate mt-5">
                    <div class="services-2 text-center">
                        <img class="mb-2" src="{{ asset('storage/'.$program->image)}}" width="100px" height="100px" style="border-radius: 50%">
                        <h2 class="mb-4"><a href="#">{{$program->name}}</a></h2>
                        <a href="#" class="btn btn-primary px-md-5 py-2" > تنزيل <span><i class="fa fa-cloud-download" aria-hidden="true"></i>
            </span> </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- software Section end -->

<!-- tzm Section start -->
<section id="tzm" class="ftco-counter ftco-section p-5 img bg-light" >
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>توزيع المناهج </h2>
            </div>
        </div>
        <div class="row">
            @foreach($curriculumsDis as $curriculumDis)
                <div class="col-md-4 d-flex align-items-stretch ftco-animate mt-5">

                    <div class="services-2 text-center">
                        <h2 class="mb-4"><a href="#">{{$curriculumDis->name}}</a></h2>
                        <a href="{{$curriculumDis->url}}" class="btn btn-primary px-md-5 py-2 " > تصفح <span><i class="fa fa-cloud-download" aria-hidden="true"></i>
                     </span> </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- tzm Section end -->

<!-- curriculum Section start -->
<section id="curriculum" class="ftco-section p-5">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>مناهج الطلاب </h2>
            </div>
        </div>
        <div class="row">
            @foreach($curriculums as $curriculum)
                <div class="col-md-4 d-flex align-items-stretch ftco-animate mt-5">

                    <div class="services-2 text-center">
                        <h2 class="mb-4"><a href="#">{{$curriculum->name}}</a></h2>
                        <a href="{{$curriculum->url}}" class="btn btn-primary px-md-5 py-2 " > تصفح <span><i class="fa fa-cloud-download" aria-hidden="true"></i>
                     </span> </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- curriculum Section end -->

<!-- techguides Section start -->
<section id="techguides" class="ftco-counter ftco-section p-5 img bg-light" >
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>أدلة المعلمين</h2>
            </div>
        </div>
        <div class="row">
            @foreach($teacherGuides as $teacherGuide)
                <div class="col-md-4 d-flex align-items-stretch ftco-animate mt-5">

                    <div class="services-2 text-center">
                        <h2 class="mb-4"><a href="#">{{$teacherGuide->name}}</a></h2>
                        <a href="{{$teacherGuide->url}}" class="btn btn-primary px-md-5 py-2 " > تصفح <span><i class="fa fa-cloud-download" aria-hidden="true"></i>
                     </span> </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- techguides Section end -->

<!-- footer Section start -->
<footer class="ftco-footer bg-dark pb-2">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-md text-center">
                <div class="ftco-footer-widget ">
                    <h2 class="ftco-heading-2 logo">تابعونا على شبكاتنا الاجتماعية</h2>
                    <ul class="ftco-footer-social list-unstyled pl-5">
                        @forelse($socialMediads as $socialMediad)
                            <li class="ftco-animate">
                                <a href="{{$socialMediad->url}}" class="d-flex align-items-center justify-content-center">
                                <span class="{{$socialMediad->icon}}">
                                    <i class="sr-only">{{$socialMediad->name}}</i>
                                </span>
                                </a>
                            </li>
                        @empty
                                <li class="ftco-animate">
                                    <a href="https://twitter.com/mo3alemalhaseb">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="https://telegram.me/mo3alemAlhaseb">
                                <span class="fa fa-telegram " aria-hidden="true">
                                </span></a>
                                <li class="ftco-animate"><a href="https://www.instagram.com/mo3alemalhaseb/">
                                        <span class="fa fa-instagram"></span></a></li>
                                <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCYy9TelYCFGF-jJxTVXn-0A"><span class="fa fa-youtube"></span></a></li>

                        @endforelse
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">خدمات اخرى</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li>
                                <span class="icon fa fa-dribbble"></span>
                                <a href="#"><span>المدونة</span></a>
                            </li>
                            <li>
                                <span class="icon fa fa-envelope-o"></span>
                                <span class="text"><p>mo3alemalhaseb@gmail.com</p></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12  col-md" style="color: rgb(255, 255, 255);">
                <h5 class="text-uppercase font-weight-light text-center  mx-auto  border-light">
                    <img src="front/images/1part-1-296x319.png">
                </h5>
                <h5 class="text-uppercase font-weight-light text-center my-3 mx-auto  border-light">
                    <span class="d-block">موقع معلم الحاسب</span>
                    <span class="d-block"> جميع الحقوق محفوظة</span>
                </h5>
                <h3 class="d-block text-center" style="color: #c87924 "><script>document.write(new Date().getFullYear());</script></h3>
            </div>
        </div>
    </div>
</footer>
<!-- footer Section end -->

{{--WhatsApp Icon --}}
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
    </svg></div>
<a href="https://api.whatsapp.com/send?phone=+966504883472&amp;text=السلام عليكم" class="float" target="_blank" >
    <i class="fa fa-whatsapp my-float"></i>
</a>

{{--JavaScript Code--}}
<script src="front/js/jquery.min.js"></script>
<script src="front/js/jquery-migrate-3.0.1.min.js%2bpopper.min.js%2bbootstrap.min.js.pagespeed.jc.UKOCzmBPUH.js"></script>
<script>eval(mod_pagespeed_jwx0YVEB9q);</script>
<script>eval(mod_pagespeed_X2fLR7n3K4);</script>
<script>eval(mod_pagespeed_EYO4pUhwS8);</script>
<script src="front/js/jquery.easing.1.3.js%2bjquery.waypoints.min.js%2bjquery.stellar.min.js%2bowl.carousel.min.js.pagespeed.jc.olQ4X7F3Ji.js"></script>
<script>eval(mod_pagespeed_tQIKhvtBUI);</script>
<script>eval(mod_pagespeed_ui322ot5aU);</script>
<script>eval(mod_pagespeed_ybiTy5c101);</script>
<script>eval(mod_pagespeed_$0u99wXsSz);</script>
<script src="front/js/jquery.magnific-popup.min.js%2bjquery.animateNumber.min.js%2bscrollax.min.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.o6aGfvVua8.js"></script>
<script>eval(mod_pagespeed_l7OIw9j6zF);</script>
<script>eval(mod_pagespeed_NvKvIcBN4V);</script>
<script>eval(mod_pagespeed_vFHVG6uCPw);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script>eval(mod_pagespeed_X544e3a16B);</script>
<script>eval(mod_pagespeed_Sh1pEWL0Ma);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597"
        integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A=="
        data-cf-beacon='{"rayId":"6b048818aef6cd5d","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}'
        crossorigin="anonymous"></script>
</body>
</html>
