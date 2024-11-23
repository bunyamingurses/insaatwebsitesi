@extends("layouts.front.index")
@section("content")
    @include("layouts.front.partials.pageHeader")
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">私たちの使命</h6>
                            <h1 class="display-6 mb-0">
                                私たちの使命
                            </h1>
                        </div>
                        <p>{{ \App\Models\about::getAbout("mission") }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    @include("layouts.front.partials.outTeam")
@endsection
