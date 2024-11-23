<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Designed By www.gursesyazilim.com -->
    <meta charset="utf-8"/>
     <title>{{ \App\Models\setting::getSetting("title") }}</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ \App\Models\setting::getSetting("description") }}"/>
    <meta http-equiv="cache-control" content="public"/>
    <meta name="copyright" content="{{ \App\Models\setting::getSetting("siteUrl") }}"/>
    <meta name="author" content="{{ \App\Models\setting::getSetting("author") }}"/>
    <meta name="distribution" content="Global"/>
    <meta name="robots" content="INDEX,FOLLOW"/>


    <meta property="og:type" content="website"/>
    <meta property="og:url"
          content="{{ \App\Models\setting::getSetting("siteUrl") }}"/>
    <meta property="og:image" content="https://www.internetamca.com/assets/frontAssets/img/internetamcaLogoWhite.png"/>
    <meta property="og:site_name" content="{{ \App\Models\setting::getSetting("title") }}"/>
    <meta property="og:description" content="{{ \App\Models\setting::getSetting("description") }}"/>
    <meta property="og:locale" content="tr_TR"/>
    <meta property="og:title" content="{{ \App\Models\setting::getSetting("title") }}"/>

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ \App\Models\setting::getSetting("siteUrl") }}">
    <meta property="twitter:title" content="{{ \App\Models\setting::getSetting("title") }}">
    <meta property="twitter:description" content="{{ \App\Models\setting::getSetting("title") }}">
    <meta property="twitter:image" content="https://www.internetamca.com/assets/frontAssets/img/internetamcaLogoWhite.png">

    


    <!-- Favicon -->
    <link href="{{ asset("images/setting")."/".\App\Models\setting::getSetting("icon") }}" rel="icon"/>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset("assets/frontAssets/lib/animate/animate.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("assets/frontAssets/lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset("assets/frontAssets/css/bootstrap.min.css") }}" rel="stylesheet"/>

    <!-- Template Stylesheet -->
    <link href="{{ asset("assets/frontAssets/css/style.css") }}" rel="stylesheet"/>


    @yield("styles")
</head>

<body>
<!-- Spinner Start -->
<div
    id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
>
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div
                class="h-100 d-inline-flex align-items-center border-start border-end px-3"
            >
                <small class="fa fa-phone-alt me-2"></small>
                <small>{{ \App\Models\setting::getSetting("phoneNumber") }}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center border-end px-3">
                <small class="far fa-envelope-open me-2"></small>
                <small>{{ \App\Models\setting::getSetting("email") }}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center border-end px-3">
                <small class="far fa-clock me-2"></small>
                <small>{{ \App\Models\setting::getSetting("siteCalismaSaat") }}</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-square border-end border-start" href="{{ \App\Models\setting::getSetting("facebook") }}"
                ><i class="fab fa-facebook-f"></i
                    ></a>
                <a class="btn btn-square border-end" href="{{ \App\Models\setting::getSetting("twitter") }}"
                ><i class="fab fa-twitter"></i
                    ></a>
                <a class="btn btn-square border-end" href="{{ \App\Models\setting::getSetting("linkedin") }}"
                ><i class="fab fa-linkedin-in"></i
                    ></a>
                <a class="btn btn-square border-end" href="{{ \App\Models\setting::getSetting("instagram") }}"
                ><i class="fab fa-instagram"></i
                    ></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav
    class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
>
    <a href="{{ route("homepage") }}" class="navbar-brand d-flex align-items-center">
        <img src="{{ asset("imagesWebp/setting/")."/".\App\Models\setting::getSetting("logoHeaderWebp") }}" width="200px" alt="">

        {{--        <h1 class="m-0">--}}
        {{--            <i class="fa fa-building text-primary me-3"></i>EVRENONE--}}
        {{--        </h1>--}}
    </a>
    <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
            @php
                $routeName=request()->route()->getName();
            @endphp
            <a href="{{ route("homepage") }}" class="nav-item nav-link @if($routeName=="homepage") active @endif">ホーム</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle @if($routeName=="about" || $routeName=="mission" || $routeName=="vision" || $routeName=="team") active @endif" data-bs-toggle="dropdown">会社概要</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route("about") }}" class="dropdown-item @if($routeName=="about") active @endif">会社概要</a>
                    <a href="{{ route("mission") }}" class="dropdown-item @if($routeName=="mission") active @endif">ミッション</a>
                    <a href="{{ route("vision") }}" class="dropdown-item @if($routeName=="vision") active @endif">ビジョン</a>
                    <!--<a href="{{ route("team") }}" class="dropdown-item @if($routeName=="team") active @endif">私たちのチーム</a>-->
                </div>
            </div>

            <a href="{{ route("services") }}" class="nav-item nav-link @if($routeName=="services") active @endif">サービス</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle @if($routeName=="gallery" || $routeName=="galleryBA") active @endif" data-bs-toggle="dropdown">ギャラリー</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route("gallery") }}" class="dropdown-item @if($routeName=="gallery") active @endif">ギャラリー</a>
                    <a href="{{ route("galleryBA") }}" class="dropdown-item @if($routeName=="galleryBA") active @endif">ポートフォリオ</a>
                </div>
            </div>


            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle @if($routeName=="career" || $routeName=="careerPartnerShip") active @endif" data-bs-toggle="dropdown">募集</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route("career") }}" class="dropdown-item @if($routeName=="career") active @endif">募集</a>
                    <a href="{{ route("careerPartnerShip") }}" class="dropdown-item @if($routeName=="careerPartnerShip") active @endif">ビジネスパートナーシップ</a>
                </div>
            </div>
            <a href="{{ route("contact") }}" class="nav-item nav-link @if($routeName=="contact") active @endif">お問い合わせ</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
