@extends("layouts.front.index")
@section("content")
    @include("layouts.front.partials.pageHeader")

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            @if(session("status"))
                <div class="alert alert-secondary"  style="background-color: #FDA12B; color:white;"> {{ session("status") }}</div>
            @endif
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">私たちに書いてください</h6>
                        <h1 class="display-6 mb-0">
                            ご質問がございましたら、お問い合わせください
                        </h1>
                    </div>
                    <p class="mb-4">以下の項目にご記入の上、最下部の[送信]ボタンを押してください。（半角カタカナは利用しないようお願い致します）※印は入力必須項目です。
                    </p>
                    <form action="{{ route("contactCreate") }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="subject"
                                        name="subject"
                                        placeholder="Subject"
                                    />
                                    <label for="subject">件名を指定する</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                    <textarea
                        class="form-control border-0 bg-light"
                        placeholder="Leave a message here"
                        id="message"
                        name="message"
                        style="height: 150px"
                    ></textarea>
                                    <label for="message">メッセージを述べてください</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">
                                    送信 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection
