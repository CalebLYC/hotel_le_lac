@extends('layouts.layout')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">A Propos de Nous</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Propos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="bg-white shadow" style="padding: 35px;">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" placeholder="Check in"
                                        data-target="#date1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" placeholder="Check out"
                                        data-target="#date2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Adultes</option>
                                    <option value="1">Adult 1</option>
                                    <option value="2">Adult 2</option>
                                    <option value="3">Adult 3</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Enfant</option>
                                    <option value="1">Child 1</option>
                                    <option value="2">Child 2</option>
                                    <option value="3">Child 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary w-100">Soumettre</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                    <h1 class="mb-4">Bienvenue à <span class="text-primary text-uppercase">l'Hotel Le Lac</span></h1>
                    <p class="mb-4">Découvrez un paradis d'élégance et de raffinement au cœur de notre hôtel de luxe.
                        Niché entre des paysages pittoresques et une vue imprenable, notre établissement incarne l'art du
                        bien-être. Des chambres somptueusement décorées aux suites opulentes, chaque espace est une
                        invitation à l'évasion. Plongez dans une expérience gastronomique exquise dans nos restaurants
                        primés, offrant des saveurs créatives et des délices pour tous les palais. Détendez-vous au spa
                        exclusif, où le luxe se fond harmonieusement avec la sérénité, vous laissant revigoré et apaisé.
                        Laissez-vous envoûter par le charme intemporel de notre hôtel de luxe, où chaque instant devient un
                        souvenir inoubliable.</p>
                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">12</h2>
                                    <p class="mb-0">Chambres</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">17</h2>
                                    <p class="mb-0">Staffs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">340</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Explorez Plus</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg"
                                style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    @include('partials.events')

    @include('partials.newsletter')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
@endsection
