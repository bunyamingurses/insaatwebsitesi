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
                    <form action="{{ route("admin.setting.aboutPost") }}" method="post" class="form-horizontal form-label-left">
                        @csrf

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteAuthor">について
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea type="text" id="about" name="about" required="required"
                                       class="form-control col-md-7 col-xs-12" rows="5"
                                          placeholder="会社の説明を入力してください!">{{ @$about[0]["about"] }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sitePhoneNumber">ミッション
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea type="text" id="mission" name="mission" required="required"
                                       class="form-control col-md-7 col-xs-12" rows="5"
                                          placeholder="あなたの会社のミッションを入力してください">{{ @$about[0]["mission"] }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteEmail">ビジョン
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea type="text" id="vision" name="vision" required="required"
                                       class="form-control col-md-7 col-xs-12" rows="5"
                                          placeholder="ビジョンテキストを入力してください">{{ @$about[0]["vision"] }}</textarea>
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">作成する<span
                                        class="fa fa-plus-circle"></span></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
