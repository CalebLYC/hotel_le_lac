@extends('admin.layouts.layout')

@section('content')
    <div>
        <h5>
            <span><a href="">Ajouter Une Nouvelle chambre</a></span>
        </h5>
    </div>
    </br>
    <form action="{{ route('rooms.store') }}" method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <!--<div class="dropzone" id="dropzone">
                                                                                                                                                                                                                <p>Cliquez ici ou faites glisser une image ici pour ajouter l'image de la chambre
                                                                                                                                                                                                                    <img class="resizeimg" src="../../images/image.png">
                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                <input name="image" type="file" id="fileInput" style="display: none;">                                                                                                                                                                 </div>

                                                                                                                                                                                                            <div class="button-container">
                                                                                                                                                                                                                <button id="viewButton" style="display: none;">Voir l'image</button>
                                                                                                                                                                                                                <button id="deleteButton" style="display: none;">Supprimer l'image</button>
                                                                                                                                                                                                            </div>-->
        <div>
            <input type="file" name="image">
        </div>

        </br>
        <div>
            <label for="name">Nom de la chambre </label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="prix">Prix </label>
            <input type="text" id="prix" name="prix">
        </div>
        </br>
        <div>
            <label for="description">Description</label>
            <textarea id="description" rows="4" cols="50" name="description"></textarea>
        </div>
        <div>
            <label for="nbr_lits">Nombre de lits </label>
            <input type="number" id="nbr_lits" name="nbr_lits">
        </div>
        <div>
            <label for="nbr_bains">Nombres de bains </label>
            <input type="number" id="nbr_bains" name="nbr_bains">
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
        <div class="text-center m-3 mt-3">
            <button type="submit" class="btn btn-primary p-3" style="cursor: pointer;">Ajouter la chambre</button>
        </div>
    </form>
    </br></br>
    <div>
        <h2 class=>
            Nos Chambres
        </h2>
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
    </div>
@endsection
