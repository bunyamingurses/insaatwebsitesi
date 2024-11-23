@extends("layouts.admin.index")
@section("content")
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        @if(session("status"))
            <div class="alert alert-info"> {{ session("status") }}</div>
        @endif
            <div class="x_panel">
                <div class="x_title">
                    <h2>Site Bilgileri  Formu</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form action="{{ route("admin.setting.update",["id"=>1]) }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="logoHeader"> Site Icon
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <img src="{{ asset("images/setting/")."/".@$setting[0]["icon"] }}" width="150" alt="">
                                <input type="file" id="icon" name="icon"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="logoHeader"> Header Logo
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <img src="{{ asset("imagesWebp/setting/")."/".@$setting[0]["logoHeaderWebp"] }}" width="150" alt="">
                                <input type="file" id="logoHeader" name="logoHeader"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="logoFooter"> Footer Logo
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <img src="{{ asset("imagesWebp/setting/")."/".@$setting[0]["logoFooterWebp"] }}" width="150" alt="">
                                <input type="file" id="logoFooter" name="logoFooter"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteUrl">Site Url
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteUrl" name="siteUrl" required="required" value="{{ @$setting[0]["siteUrl"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Kategori Adını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteTitle">Site Title
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteTitle" name="siteTitle" required="required" value="{{ @$setting[0]["title"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Kategori Adını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteDescription">Site Description
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteDescription" name="siteDescription" required="required" value="{{ @$setting[0]["description"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Kategori Adını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteKeyword">Site Keyword
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteKeyword" name="siteKeyword" required="required" value="{{ @$setting[0]["keyword"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Kategori Adını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteAuthor">Site Author
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteAuthor" name="siteAuthor" required="required" value="{{ @$setting[0]["author"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Kategori Adını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sitePhoneNumber">Site Phone Number
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="sitePhoneNumber" name="sitePhoneNumber" required="required" value="{{ @$setting[0]["phoneNumber"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Kategori Adını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteEmail">Site E-Mail
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteEmail" name="siteEmail" required="required" value="{{ @$setting[0]["email"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Kategori Adını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteEmail">Site Age
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteAge" name="siteAge" required="required" value="{{ @$setting[0]["siteAge"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Firma Yaşını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteEmail">Site Çalışma Saatleri
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteAge" name="siteCalismaSaat" required="required" value="{{ @$setting[0]["siteCalismaSaat"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Firma Yaşını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteEmail">Site Adress
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteAge" name="address" required="required" value="{{ @$setting[0]["address"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Firma Yaşını Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteEmail">Site Facebook
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteAge" name="facebook" required="required" value="{{ @$setting[0]["facebook"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Facebook Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteEmail">Site Twitter
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteAge" name="twitter" required="required" value="{{ @$setting[0]["twitter"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Twitter Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteEmail">Site İnstagram
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteAge" name="instagram" required="required" value="{{ @$setting[0]["instagram"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen İnstagram Girin.!">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="siteEmail">Site Linkedin
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="siteAge" name="linkedin" required="required" value="{{ @$setting[0]["linkedin"] }}"
                                       class="form-control col-md-7 col-xs-12"
                                       placeholder="Lütfen Linkedin Girin.!">
                            </div>
                        </div>




                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Site Bilgi Güncelle <span
                                        class="fa fa-plus-circle"></span></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
