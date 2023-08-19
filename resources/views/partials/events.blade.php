<!-- Events Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Evènements</h6>
            <h1 class="mb-5">Participer à nos <span class="text-primary text-uppercase">évènements</span></h1>
        </div>
        <div class="row g-4">
            @forelse ($events as $event)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded shadow overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ Storage::url($event->image_url) }}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <small>{{ $event->getDateAttribute($event->date) }}</small>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">{{ $event->name }}</h5>
                            <small>{{ $event->description }}</small>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
    <!-- Events End -->
