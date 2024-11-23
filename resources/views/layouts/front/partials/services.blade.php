<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end mb-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="border-start border-5 border-primary ps-4">
                    <h6 class="text-body text-uppercase mb-2">当社のサービス</h6>
                    <h1 class="display-6 mb-0">
                        建設および改修ソリューション
                    </h1>
                </div>
            </div>
            <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            @php $serviceHome=\App\Models\services::inRandomOrder()->limit(6)->get();@endphp
            @foreach($serviceHome as $serviceHomeWrite)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" style="height: 300px; width:100%;" src="{{ asset("imagesWebp/services/")."/".$serviceHomeWrite->imagesWebp }}" alt=""/>
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">{{ $serviceHomeWrite->title }}</h5>
                            <p>{{ $serviceHomeWrite->text }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->
