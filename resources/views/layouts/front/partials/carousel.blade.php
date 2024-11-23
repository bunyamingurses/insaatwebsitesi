<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
            $carousel=\App\Models\carousel::get();
            $say=0;
            @endphp
            @foreach($carousel as $carouselWrite)
                @if($say==0)
                    @php $say++; @endphp
                    <div class="carousel-item active">
                        <img width="100%" style="max-height: 700px;" src="{{ asset("imagesWebp/carousel/")."/".$carouselWrite->imageWebp }}" alt="Image" />
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-10">
                                        <h5 class="text-light text-uppercase mb-3 animated slideInDown">
                                            {{ $carouselWrite->title }}
                                        </h5>
                                        <h1 class="display-4 text-light mb-3 animated slideInDown">
                                            {{ $carouselWrite->description }}
                                        </h1>
                                        <ol class="breadcrumb mb-4 pb-2">
                                            @php
                                                $etiket=explode(",",$carouselWrite->ticket);
                                            @endphp
                                            @foreach ($etiket as $etiketYaz)
                                            <li class="breadcrumb-item fs-5 text-light">
                                                {{ $etiketYaz }}
                                            </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="carousel-item">
                        <img  width="100%" style="max-height: 700px" src="{{ asset("imagesWebp/carousel/")."/".$carouselWrite->imageWebp }}" alt="Image" />
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-10">
                                        <h5
                                            class="text-light text-uppercase mb-3 animated slideInDown"
                                        >
                                            {{ $carouselWrite->title }}
                                        </h5>
                                        <h1 class="display-4 text-light mb-3 animated slideInDown">
                                            {{ $carouselWrite->description }}
                                        </h1>
                                        <ol class="breadcrumb mb-4 pb-2">
                                            @php
                                                $etiket=explode(",",$carouselWrite->ticket);
                                            @endphp
                                            @foreach ($etiket as $etiketYaz)
                                                <li class="breadcrumb-item fs-5 text-light">
                                                    {{ $etiketYaz }}
                                                </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif
            @endforeach
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
