@extends('admin.layouts.layout')

@section('content')
    <!-- slider section -->
    <section class="slider_section position-relative">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="images/slider-bg.jpg" class="" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="images/slider-bg.jpg" class="" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="images/slider-bg.jpg" class="" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_btn_box">
                <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="detail-box">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="inner_detail-box">
                    <h1>
                        Hotel le lac <br>

                    </h1>
                    <p>
                        HOTEL Le Lac Togo, hotel de luxe. Un endroit très calme et apaisant offrant une vue agréable sur les
                        lacs. Vivez de Bons moments et l'Hotel Le Lac.
                    </p>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->

    <!-- about section -->

    <!-- end about section -->

    <!-- gallery section -->

    <div class="gallery_section layout_padding2">
        <div class="container-fluid">
            <div class="heading_container heading_center">
                <h2>
                    Chambres
                </h2>
            </div>
            <div class="row">
                <div class=" col-sm-8 col-md-6 px-0">
                    <div class="img-box">
                        <img src="images/g1.jpg" alt="">
                        <a href="images/g1.jpg" data-toggle="lightbox" data-gallery="gallery">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 px-0">
                    <div class="img-box">
                        <img src="images/g2.jpg" alt="">
                        <a href="images/g2.jpg" data-toggle="lightbox" data-gallery="gallery">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 px-0">
                    <div class="img-box">
                        <img src="images/g3.jpg" alt="">
                        <a href="images/g3.jpg" data-toggle="lightbox" data-gallery="gallery">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 px-0">
                    <div class="img-box">
                        <img src="images/g4.jpg" alt="">
                        <a href="images/g4.jpg" data-toggle="lightbox" data-gallery="gallery">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 px-0">
                    <div class="img-box">
                        <img src="images/g5.jpg" alt="">
                        <a href="images/g5.jpg" data-toggle="lightbox" data-gallery="gallery">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-8 col-md-6 px-0">
                    <div class="img-box">
                        <img src="images/g6.jpg" alt="">
                        <a href="images/g6.jpg" data-toggle="lightbox" data-gallery="gallery">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    Voir Plus
                </a>
            </div>
        </div>
    </div>
@endsection
