@extends("layouts.front.index")
@section("styles")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"/>
@endsection
@section("content")
    @include("layouts.front.partials.pageHeader")
    <div class="container">
        <div class="portfolio-item row">
            @php $gallery=\App\Models\gallery::get(); @endphp
            @foreach($gallery as $galleryWrite)

                <div class="item col-lg-3 col-md-4 col-6 mt-2">
                    <a href="{{ asset("imagesWebp/gallery/")."/".$galleryWrite->imageWebp }}" class="fancylight popup-btn" data-fancybox-group="light">
                        <img style="height: 250px;" class="img-fluid" src="{{ asset("imagesWebp/gallery/")."/".$galleryWrite->imageWebp }}" alt="">
                    </a>
                </div>
            @endforeach

        </div>
    </div>

@endsection

@section("scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script>
        $('.portfolio-menu ul li').click(function () {
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter: selector
            });
            return false;
        });
        $(document).ready(function () {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>

@endsection
