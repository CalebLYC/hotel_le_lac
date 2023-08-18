@extends('admin.layouts.layout')

@section('content')
    <!-- slider section -->
    <section class="slider_section position-relative">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="{{ asset('images/slider-bg.jpg') }}" class="" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="{{ asset('images/slider-bg.jpg') }}" class="" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="{{ asset('images/slider-bg.jpg') }}" class="" alt="...">
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
            <div class="container row g-4">
                @forelse ($rooms as $room)
                    <div class="col-lg-4 col-md-6 mb-5" data-wow-delay="0.6s" style="width: 200px; height: 300px;">
                        <div class="shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" style="width:100%; height: 200px; object-fit:cover;"
                                    src="{{ Storage::url($room->image_url) }}" alt="">
                            </div>
                            <div class="pl-3">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{ $room->name }}</h5>
                                    <div class="">
                                        @for ($i = 0; $i < $room->nbr_stars; $i++)
                                            <small class="fa fa-star text-primary"></small>
                                        @endfor
                                        @for ($i = 0; $i < 5 - $room->nbr_stars; $i++)
                                            <small class="fa fa-star text-white"></small>
                                        @endfor
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa fa-bed text-primary me-2"></i>
                                        {{ $room->nbr_lits }}lits
                                    </small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>
                                        {{ $room->nbr_bains }}bains</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href=""
                                        style="cursor: pointer;">Modifier</a>
                                    <button class="btn btn-sm btn-danger rounded py-2 px-4" style="cursor: pointer;"
                                        onclick='document.getElementById("delete{{ $room->id }}").submit()'>Supprimer</button>
                                    <form action="{{ route('rooms.destroy', ['id' => $room->id]) }}" method="post"
                                        id="delete{{ $room->id }}">
                                        @method('delete')
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center ml-5">Aucune chambre ajoutée</div>
                @endforelse
            </div>
            <div class="btn-box">
                <a href="{{ route('admin.index') }}">
                    Voir Plus
                </a>
            </div>
        </div>
    </div>
@endsection
