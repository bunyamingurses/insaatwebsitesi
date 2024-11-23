@extends("layouts.front.index")

@section("content")

    @include("layouts.front.partials.pageHeader")
    <div class="container">
        <div class="row">
            @php $galleryBA=\App\Models\galleryba::get(); $say=1;@endphp
            @foreach($galleryBA as $galleryBAWrite)
                @php $say++;  @endphp
                <div id="carouselExampleFade{{ $say }}" class="col-lg-6 carousel slide  carousel-fade mt-2" data-bs-ride="carousel">
                    <div class="carousel-inner" style="border:5px solid #FDA12B; border-radius: 10px;">
                        <div class="carousel-item active">
                            <img src="{{ asset("imagesWebp/galleryba/")."/".$galleryBAWrite->imageBeforeWebp }}" style="max-height: 300px; width: 100%" class="d-inline-block" alt="...">

                        </div>
                        <div class="carousel-item justify-content-center">
                            <img src="{{ asset("imagesWebp/galleryba/")."/".$galleryBAWrite->imageAfterWebp }}" style="max-height: 300px; width: 100%;" class="d-inline-block " alt="...">
                        </div>

                    </div>
                    <button class="carousel-control-prev" style="width: 40px; margin-left: 20px" type="button" data-bs-target="#carouselExampleFade{{ $say }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" style="width: 40px; margin-right: 20px" type="button" data-bs-target="#carouselExampleFade{{ $say }}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @endforeach


        </div>
    </div>

@endsection
