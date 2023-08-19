@auth
    <!-- Newsletter Start -->
    <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="justify-content-center">
            <div class="col-lg-10 border rounded p-1">
                <div class="border rounded text-center p-1 flex-column">
                    <div class="bg-white rounded text-center p-5">
                        <h4 class="mb-4">Ajouter un <span class="text-primary text-uppercase">commentaire</span>
                        </h4>
                        <form action="{{ route('comments.store') }}" method="post" class="">
                            @method('post')
                            @csrf
                            <div class="mb-3">
                                <textarea name="content" id="" cols="50" rows="3" placeholder="Votre commentaire"></textarea>
                            </div>
                            <div class=" mt-3 text-center">
                                <button type="submit" class="btn btn-primary">Soumettre</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Start -->
@else
    <!-- Newsletter Start -->
    <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row justify-content-center">
            <div class="col-lg-10 border rounded p-1">
                <div class="border rounded text-center p-1">
                    <div class="bg-white rounded text-center p-5">
                        <h4 class="mb-4">Abonnez-vous à notre <span class="text-primary text-uppercase">Newsletter</span>
                        </h4>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                            <button type="button"
                                class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Soumettre</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Start -->
@endauth
