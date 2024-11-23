<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div
                    class="position-relative overflow-hidden ps-5 pt-5 h-100"
                    style="min-height: 400px"
                >
                    <img
                        class="position-absolute w-100 h-100"
                        src="{{ asset("imagesWebp/102585260.webp") }}"
                        alt=""
                        style="object-fit: cover"
                    />
                    <div
                        class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                        style="width: 200px; height: 200px"
                    >
                        <div
                            class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3"
                        >
                            <h1 class="text-white">{{ \App\Models\setting::getSetting("siteAge") }}</h1>
                            <h2 class="text-white">年 経験</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">私たちについて</h6>
                        <h1 class="display-6 mb-0">
                            私たちについて
                        </h1>
                    </div>
                    <p>{{ \App\Models\about::getAbout("about") }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
