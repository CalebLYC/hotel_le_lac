@extends('layouts.layout')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Chambres</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Chambres</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
        </div>
    </div>

    <!-- Room Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Nos Chambres</h6>
                <h1 class="mb-5">Explorez Nos <span class="text-primary text-uppercase">Chambres</span></h1>
            </div>
            <div class="row g-4">
                @forelse ($rooms as $room)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid chambre-image" src="{{ Storage::url($room->image_url) }}"
                                    alt="">
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">${{ $room->prix }}/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{ $room->name }}</h5>
                                    <div class="ps-2">
                                        @for ($i = 0; $i < $room->nbr_stars; $i++)
                                            <small class="fa fa-star text-primary"></small>
                                        @endfor
                                        @for ($i = 0; $i < 5 - $room->nbr_stars; $i++)
                                            <small class="fa fa-star text-white"></small>
                                        @endfor
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa fa-bed text-primary me-2"></i>
                                        {{ $room->nbr_lits }}lits
                                    </small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>
                                        {{ $room->nbr_bains }}bains</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">{{ $room->description }}</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Voir les détails</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4"
                                        href="{{ route('booking.create', ['room_id' => $room->id]) }}">Réserver
                                        maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <!-- Room End -->

    @include('partials.testimonials')

    @include('partials.newsletter')
@endsection
