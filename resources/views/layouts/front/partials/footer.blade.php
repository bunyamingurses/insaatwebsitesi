
<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h1 class="text-white mb-4">
                    <img src="{{ asset("imagesWebp/setting/")."/".\App\Models\setting::getSetting("logoFooterWebp") }}" alt="">
                </h1>

                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-primary me-1" href="{{ \App\Models\setting::getSetting("twitter") }}"
                    ><i class="fab fa-twitter"></i
                        ></a>
                    <a class="btn btn-square btn-outline-primary me-1" href="{{ \App\Models\setting::getSetting("facebook") }}"
                    ><i class="fab fa-facebook-f"></i
                        ></a>
                    <a class="btn btn-square btn-outline-primary me-1" href="{{ \App\Models\setting::getSetting("instagram") }}"
                    ><i class="fab fa-instagram"></i
                        ></a>
                    <a class="btn btn-square btn-outline-primary me-0" href="{{ \App\Models\setting::getSetting("linkedin") }}"
                    ><i class="fab fa-linkedin-in"></i
                        ></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">住所</h4>
                <p>
                    <i class="fa fa-map-marker-alt me-3"></i>{{ \App\Models\setting::getSetting("address") }}
                </p>
                <p><i class="fa fa-phone-alt me-3"></i>{{ \App\Models\setting::getSetting("phoneNumber") }}</p>
                <p><i class="fa fa-envelope me-3"></i>{{ \App\Models\setting::getSetting("email") }}</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">クイックリンク</h4>
                <a class="btn btn-link" href="{{ route("homepage") }}">ホームページ</a>
                <a class="btn btn-link" href="{{ route("about") }}">私たちについて</a>
                <a class="btn btn-link" href="{{ route("services") }}">当社のサービス</a>
                <a class="btn btn-link" href="{{ route("gallery") }}">写真</a>
                <a class="btn btn-link" href="{{ route("contact") }}">接触</a>
            </div>

        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="{{ \App\Models\setting::getSetting("siteUrl") }}">WWW.EVRENONE.COM</a> 無断転載を禁止します
                </div>
                <div class="col-md-6 text-center text-md-end">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
><i class="bi bi-arrow-up"></i
    ></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset("assets/frontAssets/lib/wow/wow.min.js") }}"></script>
<script src="{{ asset("assets/frontAssets/lib/easing/easing.min.js") }}"></script>
<script src="{{ asset("assets/frontAssets/lib/waypoints/waypoints.min.js") }}"></script>
<script src="{{ asset("assets/frontAssets/lib/owlcarousel/owl.carousel.min.js") }}"></script>

<!-- Template Javascript -->
<script src="{{ asset("assets/frontAssets/js/main.js") }}"></script>

@yield("scripts")
</body>
</html>
