@extends('front.new_layout')

@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")
@section('content')
    <!--start header section-->
    <section class="header">
        <div class="container text-center">
            <h2>Our Projects</h2>
        </div>
    </section>
    <!--end header section-->
    <!--start projects section-->
    <section class="projects" id="projects">
        <div class="container text-center" data-aos-duration="2000">
            <div class="row">
                @foreach($project as $oneProject)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="{{asset('')}}assets/front/img/{{$oneProject->image}}" alt="{{$oneProject->name}}" class="img-fluid">
                        <span>{{$oneProject->name}}</span>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Swiper -->
            <!-- <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="imgs/web-design.png" alt="web-design" class="img-fluid">
                            <span>تصميم مواقع الكترونية</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="imgs/App-Development.jpg" alt="App-Development" class="img-fluid">
                            <span>تصميم تطبيقات الموبايل</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="imgs/logo-design.jpg" alt="logo-design" class="img-fluid">
                            <span>تصميم هوية بصرية</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div> -->
        </div>
    </section>
    <!--end projects section-->
@endsection