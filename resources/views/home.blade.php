@extends('layouts.app')
@section('page')
<!-- slider-area -->
<section class="slider-area slider-bg" data-background="img/slider/slider_bg.jpg">
    <div class="container">
        <div class="slider-overflow">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="slider-content mt-15">
                        <h2 class="wow slideInLeft" data-wow-delay="0.2s">Menyatukan <span>Mimpi</span> dalam <span>Visualisasi</span></h2>
                        <p class="wow slideInLeft" data-wow-delay="0.4s">Kami menghadirkan solusi tentang komunikasi yang efektif dan efisien guna mendukung usaha Anda.</p>
                        <a href="{{ url('/') }}" class="btn wow slideInLeft btn-home" data-wow-delay="0.6s">Start now</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 d-none d-lg-block">
                    <div class="slider-img animate-slider-img position-relative ml-50">
                        <img src="img/slider/foto-home.png" alt="img" class="slider-main-img">
                        <img src="img/slider/foto-home.png" alt="img" width="500px" class="wow slideInDown" data-wow-delay="0.6s">
                        <div class="img-nth-four wow slideInLeftS" data-wow-delay="1.4s"><img src="img/slider/cog_img1.png" alt="img" class="rotateme"></div>
                        <div class="img-nth-five wow slideInRight" data-wow-delay="1.8s"><img src="img/slider/cog_img2.png" alt="img" class="rotateme"></div>
                        <img src="img/slider/cog_img3.png" alt="img" class="wow slideInLeftS" data-wow-delay="2.2s">
                        <img src="img/slider/cog_img4.png" alt="img" class="wow fadeInUp" data-wow-delay="2.6s">
                    </div>
                </div>
            </div>
        </div>
    </div>
                        <div class="slider-shape s-shape-one"><img src="img/shape/slider_shape01.png" alt="img"></div>
                        <div class="slider-shape s-shape-two"><img src="img/shape/slider_shape03.png" alt="img"></div>
                        <div class="slider-shape s-shape-three"><img src="img/shape/slider_shape02.png" alt="img"></div>
                        <div class="slider-shape s-shape-four"><img src="img/shape/slider_shape04.png" alt="img"></div>
                        <div class="slider-shape s-shape-five"><img src="img/shape/slider_shape05.png" alt="img"></div>
                        <div class="slider-shape s-shape-six"><img src="img/shape/slider_shape06.png" alt="img"></div>
</section>
<!-- slider-area-end -->
<!-- brand-area -->
<div class="brand-area brand-mb">
    <div class="box-wrap">
        <div class="container">
            <div class="row brand-active">
                <div class="col-lg-12">
                    <div class="single-brand">
                        <img src="img/brand/logo1.png" width="150px" alt="img" style="margin-top: 15px;">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <img src="img/brand/logo2.png" width="120px" alt="img">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <img src="img/brand/logo8.jpg" width="100px" alt="img" style="margin-top: 15px;">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <img src="img/brand/logo4.png" width="120px" alt="img">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <img src="img/brand/logo5.png"  width="140px" alt="img">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <img src="img/brand/logo6.png" width="100px" alt="img" style="margin-top: 25px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-area-end -->
<!-- features-area -->
<section class="features-area pb-120 gray-bg features-pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-7 col-md-10">
                <div class="section-title text-center mb-70">
                    <span>Jelajahi cara One Dream</span>
                    <h2 class="features-area-title"> Membangun Visual yang sesuai kebutuhan Anda.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-features mb-30">
                    <div class="features-icon mb-25">
                        <i class="flaticon-photograph"></i>
                    </div>
                    <div class="features-content">
                        <h3>Videografi</h3>
                        <p>Kami mengerjakan Video Dokumentasi Event, Company Profile, Music Video, Short Movie, dan masih banyak lagi.</p>
                        <a href="{{ url('/service/video') }}">More About</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-features active mb-30">
                    <div class="features-icon mb-25">
                        <i class="flaticon-ux-design"></i>
                    </div>
                    <div class="features-content">
                        <h3>Desain Grafis</h3>
                        <p>Kami mengerjakan Desain Sosial Media, Desain untuk Branding, Desain untuk Event, dan masih banyak lagi.</p>
                        <a href="{{ url('/service/desain') }}">More About</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-features mb-30">
                    <div class="features-icon mb-25">
                        <i class="flaticon-camera"></i>
                    </div>
                    <div class="features-content">
                        <h3>Fotografi</h3>
                        <p>Kami mengerjakan Foto Dokumentasi Event, Photobooth Wisuda, Foto Sport, dan masih banyak lagi.</p>
                        <a href="{{ url('/service/foto') }}">More About</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features-area-end -->
    <!-- customer-service -->
    <section class="inner-customer-service position-relative padding-md gray-bg pb-150">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="inner-software-img software-img-shape">
                    <img src="img/images/Foto1.png" alt="img">
                </div>
            </div>
            <div class="col-lg-6 pl-80">
                <div class="section-title mb-30">
                    <h2>Solusi Terpadu untuk Keberhasilan Anda</h2>
                </div>
                <div class="software-content inner-c-services-content">
                    <p>Kami menawarkan solusi terpadu yang dirancang khusus untuk membantu Anda meraih kesuksesan. Dari pengembangan produk hingga strategi pemasaran, tim kami yang berpengalaman akan bekerja sama dengan Anda untuk mencapai tujuan Anda.</p>
                    <a href="{{ url('/contact') }}" class="btn">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- customer-service-end -->
<section class="services-area services-bg-shape pt-100 pb-120">
    <div class="container">
        <div class="row justify-content-between mb-95">
            <div class="col-xl-5 col-lg-6 col-md-9 ">
                <div class="section-title">
                    <span>Mengapa Anda </span>
                    <h2>Membutuhkan Visual yang Bagus?</h2>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="services-title-content">
                    <p>Karna visual yang bagus dapat membantu menyampaikan informasi dengan lebih jelas, menarik perhatian, dan meningkatkan pemahaman.Kami juga percaya bahwa visual yang kuat dapat membuat pesan kami lebih mudah diingat dan mempengaruhi audiens dengan cara yang positif</p>
                    <a href="{{ url('/service') }}">More Service <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <div class="single-services mb-50">
                    <div class="services-icon">
                        <img src="img/images/1.png" width="200px" alt="">   
                    </div>
                    <div class="services-content">
                        <h4>Market Analysis</h4>
                        <p>Menurut survei 65% dari masyarakat merupakan makhluk visual.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services mb-50">
                    <div class="services-icon">
                        <img src="img/images/44.png" width="130px" alt="">
                    </div>
                    <div class="services-content">
                        <h4>Exquisite Design</h4>
                        <p>85% dari masyarakat lebih yakin dengan produk karena visual yang baik.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services mb-50">
                    <div class="services-icon">
                        <img src="img/images/14.png" width="165px" alt="">
                    </div>
                    <div class="services-content">
                        <h4>Solution Defining</h4>
                        <p>Postingan yang dilengkapi dengan visual 180% lebih banyak engagement!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endSection()