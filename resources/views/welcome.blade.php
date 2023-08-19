@extends('layouts.layout')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/fond2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Vie de
                                Luxe</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Découvrez un hôtel de luxe
                            </h1>
                            <a href="{{ route('rooms.index') }}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nos
                                Chambres</a>
                            <a href="{{ route('rooms.index') }}"
                                class="btn btn-light py-md-3 px-md-5 animated slideInRight bookingLink">Réserver
                                une chambre</a>
                            @auth
                                <a href="{{ route('dashboard') }}"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight loginLink">Tableau de bord</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight loginLink">Se connecter</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/emma.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Vie de
                                Luxe</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Découvrez un hôtel de luxe
                                de marque

                            </h1>
                            <a href="{{ route('rooms.index') }}"
                                class="btn btn-light py-md-3 px-md-5 animated slideInRight bookingLink">Réserver
                                une chambre</a>
                            @auth
                                <a href="{{ route('dashboard') }}"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight loginLink">Tableau de bord</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight loginLink">Se connecter</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="bg-white shadow" style="padding: 35px;">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        placeholder="Date d'entrée" data-target="#date1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        placeholder="Date de sortie" data-target="#date2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Adulte</option>
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
                        <a href="seconecter.php"><button class="btn btn-primary w-100">Soumettre</button></a>
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
                    <h6 class="section-title text-start text-primary text-uppercase">A Propos</h6>
                    <h1 class="mb-4">Bienvenue à <span class="text-primary text-uppercase">L'Hotel Le Lac</span>
                    </h1>
                    <p class="mb-4">Bienvenue à l'Hôtel Le Lac, une oasis de luxe et de confort nichée au cœur
                        d'une ville animée. Avec ses chambres élégamment conçues, son service attentionné et ses
                        vues à couper le souffle sur la skyline urbaine, notre hôtel offre une expérience
                        inoubliable à tous ses invités. Plongez dans une ambiance raffinée où chaque détail est
                        soigneusement pensé pour créer des souvenirs inoubliables lors de votre séjour à
                        Éclatétoile.</p>
                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">30</h2>
                                    <p class="mb-0">Chambres</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">24</h2>
                                    <p class="mb-0">Staffs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">124</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Explorer Plus</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about11.jpeg"
                                style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about12.jpeg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about13.jpeg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about14.jpeg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Room Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Nos Chambres</h6>
                <h1 class="mb-5">Explorer Plus <span class="text-primary text-uppercase">Nos Chambres</span>
                </h1>
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
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Voir les
                                        détails</a>
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


    <!-- Video Start -->
    <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5">
                    <h6 class="section-title text-start text-white text-uppercase mb-3">Vie de luxe</h6>
                    <h1 class="text-white mb-4">Découvrez un hôtel de luxe de marque</h1>
                    <p class="text-white mb-4"> prestigieuse, où l'élégance intemporelle rencontre l'excellence du
                        service, offrant ainsi une expérience inégalée pour les voyageurs exigeants.</p>
                    <a href="{{ route('rooms.index') }}" class="btn btn-primary py-md-3 px-md-5 me-3">Nos Chambres</a>
                    <a href="{{ route('rooms.index') }}" class="btn btn-light py-md-3 px-md-5">Reserver Maintenant</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="video">
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Start -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Nos Services</h6>
                <h1 class="mb-5">Explorez notre <span class="text-primary text-uppercase">Service</span></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-hotel fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Chambres & Appartements</h5>
                        <p class="text-body mb-0">une oasis sophistiquée de confort et de raffinement. Nos chambres
                            élégamment aménagées vous offrent un havre de paix au cœur de la ville, dotés d'un
                            design exquis et de commodités haut de gamme, combleront les attentes des voyageurs les
                            plus exigeants. </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Alimentation & Restauration</h5>
                        <p class="text-body mb-0">Une expérience culinaire d'exception dans un cadre élégant. Notre
                            équipe de chefs talentueux éveille vos papilles avec des mets délicats. Que ce soit dans
                            notre restaurant gastronomique, notre café convivial ou notre lounge raffiné.
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-spa fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Sap & remise en forme</h5>
                        <p class="text-body mb-0"> Une retraite bien-être idyllique pour revitaliser votre corps.
                            Notre spa luxueux propose une gamme complète de soins relaxants, des massages apaisants
                            aux thérapies holistiques. Vous pourrez également profiter de notre centre de remise en
                            forme ultramoderne pour maintenir votre forme physique.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-swimmer fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Sports & Gamesg</h5>
                        <p class="text-body mb-0">Un paradis pour les amateurs de divertissements actifs. Profitez
                            d'une multitude d'installations sportives et de jeux passionnants qui vous garantissent
                            des moments de plaisir et d'excitation sans pareil.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Evenements & Fêtes</h5>
                        <p class="text-body mb-0"> l'endroit idéal pour célébrer des moments mémorables. Avec des
                            espaces polyvalents et élégants, nous sommes prêts à accueillir vos événements spéciaux,
                            des mariages somptueux aux réunions d'affaires réussie</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-dumbbell fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">GYM & Yoga</h5>
                        <p class="text-body mb-0"> votre oasis de bien-être. Notre centre de remise en forme
                            moderne pour vous aider à atteindre vos objectifs de remise en forme. Découvrez
                            également la tranquillité intérieure avec nos cours de yoga, où vous pourrez vous
                            détendre, vous recentrer et renouer avec votre esprit</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    @include('partials.testimonials')

    @include('partials.events')

    @include('partials.newsletter')
@endsection
