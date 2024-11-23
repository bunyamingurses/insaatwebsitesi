@extends("layouts.front.index")
@section("content")
    @include("layouts.front.partials.pageHeader")
    <!-- Career Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    @if(session("status"))
                        <div class="alert alert-secondary"  style="background-color: #FDA12B; color:white;"> {{ session("status") }}</div>
                    @endif
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">キャリアの機会</h6>
                        <h1 class="display-6 mb-0">あなたはキャリアを開発するのに最適な場所にいます</h1>
                    </div>
                    <p class="mb-4">成長を続ける組織では、新たに募集中のポジションを確保するための社内リソースが優先事項となります。当社の従業員は、そのポジションに必要な資格と条件を満たしている場合、空きポジションに対して評価されます。</p>
                    <form action="{{ route("careerPost") }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="name"
                                        name="name"
                                        placeholder="Your Name"
                                    />
                                    <label for="name">お名前と姓を入力してください</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input
                                        type="email"
                                        class="form-control border-0 bg-light"
                                        id="email"
                                        name="email"
                                        placeholder="Your Email"
                                    />
                                    <label for="email">電子メールアドレスを指定してください</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input
                                        type="file"
                                        class="form-control border-0 bg-light"
                                        id="file"
                                        name="file"
                                        placeholder="Subject"
                                    />
                                    <small class="text-danger">履歴書を保管しておくことが重要です。ファイル拡張子は「.pdf」のみにしてください。</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input
                                        type="number"
                                        class="form-control border-0 bg-light"
                                        id="phone"
                                        name="phone"
                                        placeholder="Your phone"
                                    />
                                    <label for="message">電話番号を入力してください</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">
                                    メッセージを送信する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Career End -->

@endsection
