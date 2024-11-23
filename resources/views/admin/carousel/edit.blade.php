@extends("layouts.admin.index")
@section("content")

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            @if(session("status"))
                <div class="alert alert-info"> {{ session("status") }}</div>
            @endif
            <div class="x_panel">
                <div class="x_title">
                    <h2>サイト情報フォーム</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form action="{{ route("admin.carousel.update",["id"=>$carousel[0]["id"]]) }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto"> カルーセル写真
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <img src="{{ asset("imagesWebp/carousel/")."/".$carousel[0]["imageWebp"] }}" width="200" alt="">
                                <input type="file" id="foto" name="foto"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteUrl">カルーセルタイトル
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="carouselTitle" name="carouselTitle" value="{{ $carousel[0]["title"] }}" required="required"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Hizmet Başlığını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteTitle">カルーセルの説明
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea type="text" id="carouselDescription" name="carouselDescription" required="required"
                                       class="form-control col-md-7 col-xs-12"
                                          placeholder="Lütfen Hizmet Açıklama Girin.!">{{ $carousel[0]["description"] }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">カルーセルチケット
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea type="text" id="carouselTicket" name="carouselTicket" required="required"
                                          class="form-control col-md-7 col-xs-12"
                                          placeholder="Lütfen Hizmet Açıklama Girin.!">{{ $carousel[0]["ticket"] }}</textarea>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">カルーセル編集<span
                                        class="fa fa-plus-circle"></span></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
