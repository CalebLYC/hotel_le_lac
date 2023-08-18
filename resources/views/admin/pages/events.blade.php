@extends('admin.layouts.layout')

@section('content')
    <div>
        <h5>
            <span><a href="">Ajouter Un évènement</a></span>
        </h5>
    </div>
    </br>
    <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="mt-3 mb-3">
            <input type="file" name="image">
        </div>

        <div>
            <label for="chambre_nom">Nom de l'évènement </label>
            <input type="text" id="chambre_nom" name="name">
        </div>
        </br>
        <div>
            <label for="description">Description</label>
            <textarea id="chambre_nom" name="description" rows="4" cols="50"></textarea>
        </div>
        </br>
        <div>
            <label for="chambre_nom">Date de l'évènement </label>
            <input type="date" id="chambre_nom" name="date">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </br>
        <div class="text-center m-3 mt-3">
            <button class="btn btn-primary p-3" style="cursor: pointer;">Ajouter l'évènement</button>
        </div>
    </form>
    <div class="container row g-4">
        @forelse ($events as $event)
            <div class="col-lg-4 col-md-6 mb-5" data-wow-delay="0.6s" style="width: 200px; height: 300px;">
                <div class="shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" style="width:100%; height: 200px; object-fit:cover;"
                            src="{{ Storage::url($event->image_url) }}" alt="">
                    </div>
                    <div class="pl-3">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">{{ $event->name }}</h5>
                            <div class="">
                                @for ($i = 0; $i < $event->nbr_stars; $i++)
                                    <small class="fa fa-star text-primary"></small>
                                @endfor
                                @for ($i = 0; $i < 5 - $event->nbr_stars; $i++)
                                    <small class="fa fa-star text-white"></small>
                                @endfor
                            </div>
                        </div>
                        <div class="d-flex">
                            <small class="border-end me-3 pe-3">
                                <i class="fa fa-bed text-primary me-2"></i>
                                {{ $event->nbr_lits }}lits
                            </small>
                            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>
                                {{ $event->nbr_bains }}bains</small>
                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href=""
                                style="cursor: pointer;">Modifier</a>
                            <button class="btn btn-sm btn-danger rounded py-2 px-4" style="cursor: pointer;"
                                onclick='document.getElementById("delete{{ $event->id }}").submit()'>Supprimer</button>
                            <form action="{{ route('events.destroy', ['id' => $event->id]) }}" method="post"
                                id="delete{{ $event->id }}">
                                @method('delete')
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center ml-5">Aucun évènement programmé</div>
        @endforelse
    </div>
@endsection
