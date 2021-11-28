@extends('layouts.master')
@section('css')
    <!--  Owl-carousel css-->
    <link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
    <!-- Maps css -->
    <link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">مرحبا، موقع معلم الحاسب</h2><br>
                <p class="mg-b-0">كل مايحتاجه المعلم</p>
            </div>
        </div>

    </div>
    <!-- /breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row ">
        <div class="row row-sm">
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-primary-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h3 class="tx-24 font-weight-bold mb-1 text-white">التحضيرات</h3>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h5 class="tx-15 font-weight-bold mb-1 text-white">عددهم</h5>
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">{{$preparations->count()}}</h4><br>
                                    <a href="{{route('preparations.index')}}" style="color: white;" type="button" class="btn btn-link btn-sm tx-10"> عرض كل التحضيرات ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-secondary-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h3 class="tx-24 font-weight-bold mb-1 text-white">العروض التقديمية</h3>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h5 class="tx-15 font-weight-bold mb-1 text-white">عددهم</h5>
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">{{$presentations->count()}}</h4><br>
                                    <a href="{{route('presentations.index')}}"  style="color: white;" type="button" class="btn btn-link btn-sm tx-10"> عرض كل العروض التقديمية ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h3 class="tx-24 font-weight-bold mb-1 text-white">البرامج</h3>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h5 class="tx-15 font-weight-bold mb-1 text-white">عددهم</h5>
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">{{$programs->count()}}</h4><br>
                                    <a href="{{route('programs.index')}}" style="color: white;" type="button" class="btn btn-link btn-sm tx-10"> عرض كل البرامج ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-danger-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h3 class="tx-24 font-weight-bold mb-1 text-white">المناهج</h3>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h5 class="tx-15 font-weight-bold mb-1 text-white">عددهم</h5>
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">{{$CurriculumDistributions->count()}}</h4><br>
                                    <a href="{{route('curriculum-distributions.index')}}" style="color: white;" type="button" class="btn btn-link btn-sm tx-10"> عرض كل المناهج ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-warning-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h3 class="tx-24 font-weight-bold mb-1 text-white">مناهج الطلاب</h3>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h5 class="tx-15 font-weight-bold mb-1 text-white">عددهم</h5>
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">{{$curriculums->count()}}</h4><br>
                                    <a href="{{route('curriculums.index')}}" style="color: white;" type="button" class="btn btn-link btn-sm tx-10"> عرض كل مناهج الطلاب ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-info-gradient">
                    <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                        <div class="">
                            <h3 class="tx-24 font-weight-bold mb-1 text-white">أدلة المعلمين</h3>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h5 class="tx-15 font-weight-bold mb-1 text-white">عددهم</h5>
                                    <h4 class="tx-20 font-weight-bold mb-1 text-white">{{$teacherGuides->count()}}</h4><br>
                                    <a href="{{route('teacherGuides.index')}}" style="color: white;" type="button" class="btn btn-link btn-sm tx-10"> عرض كل أدلة المعلمين ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->

    </div>
    <!-- row closed -->

    </div>
    </div>
    <!-- Container closed -->
@endsection
@section('js')
    <!--Internal  Chart.bundle js -->
    <script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Moment js -->
    <script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
    <!--Internal  Flot js-->
    <script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
    <script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
    <script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
    <!--Internal Apexchart js-->
    <script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
    <!-- Internal Map -->
    <script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
    <!--Internal  index js -->
    <script src="{{URL::asset('assets/js/index.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection
