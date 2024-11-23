@extends("layouts.admin.index")
@section("content")

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            @if(session("status"))
                <div class="alert alert-info"> {{ session("status") }}</div>
            @endif
            <div class="x_panel">
                <div class="x_title">
                    <h2>サービスフォーム</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form action="{{ route("admin.service.create") }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto"> 画像
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" id="foto" name="foto"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteUrl">タイトル
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="serviceTitle" name="serviceTitle" required="required"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Hizmet Başlığını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteTitle">叙述
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea type="text" id="serviceDescription" name="serviceDescription" required="required"
                                       class="form-control col-md-7 col-xs-12"
                                          placeholder="Lütfen Hizmet Açıklama Girin.!"></textarea>
                            </div>
                        </div>





                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">サービス作成 <span
                                        class="fa fa-plus-circle"></span></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
