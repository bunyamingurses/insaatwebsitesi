<!-- Page Header Start -->
<div
    class="container-fluid page-header py-5 mb-5 wow fadeIn"
    data-wow-delay="0.1s"
>

    @php
        $routeNamePage=request()->route()->getName();
    @endphp
    <div class="container text-center py-5">
        @if($routeNamePage=="about")
            <h1 class="display-4 text-white animated slideInDown mb-4">会社概要</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route("homepage") }}">ホームページ</a>
                    </li>

                    <li class="breadcrumb-item text-white">
                        会社概要
                    </li>
                </ol>
            </nav>
        @elseif($routeNamePage=="mission")
            <h1 class="display-4 text-white animated slideInDown mb-4">ミッション</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route("homepage") }}">ホームページ</a>
                    </li>

                    <li class="breadcrumb-item text-white">
                        会社概要
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        ミッション
                    </li>
                </ol>
            </nav>
        @elseif($routeNamePage=="vision")
            <h1 class="display-4 text-white animated slideInDown mb-4">ビジョン</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route("homepage") }}">ホームページ</a>
                    </li>

                    <li class="breadcrumb-item text-white">
                        会社概要
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        ビジョン
                    </li>
                </ol>
            </nav>
        @elseif($routeNamePage=="team")
            <h1 class="display-4 text-white animated slideInDown mb-4">私たちのチーム</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route("homepage") }}">ホームページ</a>
                    </li>

                    <li class="breadcrumb-item text-white">
                        会社概要
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        私たちのチーム
                    </li>
                </ol>
            </nav>
        @elseif($routeNamePage=="services")
            <h1 class="display-4 text-white animated slideInDown mb-4">サービス</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route("homepage") }}">ホームページ</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        サービス
                    </li>
                </ol>
            </nav>
        @elseif($routeNamePage=="gallery")
            <h1 class="display-4 text-white animated slideInDown mb-4">ギャラリー</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route("homepage") }}">ホームページ</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        ギャラリー
                    </li>
                </ol>
            </nav>
        @elseif($routeNamePage=="galleryBA")
            <h1 class="display-4 text-white animated slideInDown mb-4">ポートフォリオー</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route("homepage") }}">ホームページ</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        ポートフォリオ
                    </li>
                </ol>
            </nav>
        @elseif($routeNamePage=="career")
            <h1 class="display-4 text-white animated slideInDown mb-4">募集</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route("homepage") }}">ホームページ</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        募集
                    </li>
                </ol>
            </nav>
        @elseif($routeNamePage=="careerPartnerShip")
            <h1 class="display-4 text-white animated slideInDown mb-4">ビジネスパートナーシップ</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route("homepage") }}">ホームページ</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        ビジネスパートナーシップ
                    </li>
                </ol>
            </nav>
        @elseif($routeNamePage=="contact")
            <h1 class="display-4 text-white animated slideInDown mb-4">問い合わせ</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route("homepage") }}">ホームページ</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        問い合わせ
                    </li>
                </ol>
            </nav>
        @endif
    </div>
</div>
<!-- Page Header End -->
