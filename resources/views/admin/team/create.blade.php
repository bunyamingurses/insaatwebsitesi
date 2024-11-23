@extends("layouts.admin.index")
@section("content")

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            @if(session("status"))
                <div class="alert alert-info"> {{ session("status") }}</div>
            @endif
            <div class="x_panel">
                <div class="x_title">
                    <h2>チームフォーム</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form action="{{ route("admin.team.create") }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteUrl">名前 姓
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="name" name="name" required="required"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Personel Adını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteUrl">人物 仕事
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="job" name="job" required="required"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Personel Mesleğini Girin.!">
                            </div>
                        </div>




                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">人は創造する<span
                                        class="fa fa-plus-circle"></span></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
