@extends("layouts.front.index")
@section("content")
    @include("layouts.front.partials.pageHeader")


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Our Team</h6>
                        <h1 class="display-6 mb-0">Our Expert Worker</h1>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">

                </div>
            </div>
            <div class="row g-4">
                @php $teamHome=\App\Models\team::get();@endphp
                @foreach($teamHome as $teamHomeWrite)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid" style="min-height: 400px;" src="{{ asset("imagesWebp/team/")."/".$teamHomeWrite->imageWebp }}" alt=""/>
                            <div class="team-text bg-white p-3">
                                <h5>{{ $teamHomeWrite->name }}</h5>
                                <span>{{ $teamHomeWrite->job }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
