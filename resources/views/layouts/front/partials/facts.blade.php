<!-- Facts Start -->
<div class="container-fluid my-5 p-0">
    <div class="row g-0">
        @php $facts=\App\Models\services::where("isPopular",1)->get(); $say=1; @endphp
        @foreach($facts as $factsWrite)
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="position-relative">
                    <img class="img-fluid w-100" style="height: 350px" src="{{ asset("imagesWebp/services/")."/".$factsWrite->imagesWebp }}" alt=""/>
                    <div class="facts-overlay">
                        <h1 class="display-1">0{{$say++}}</h1>
                        <h4 class="text-white mb-3">{{ $factsWrite->title }}</h4>
                        <p class="text-white">{{ $factsWrite->text }}</p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
<!-- Facts End -->
