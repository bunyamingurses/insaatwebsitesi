@extends("layouts.admin.index")
@section("style")
    <link href="{{ asset("assets/adminAssets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css") }}" rel="stylesheet">

@endsection
@section("content")

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            @if(session("status"))
                <div class="alert alert-info"> {{ session("status") }}</div>
            @endif
            <div class="x_panel">
                <table class="table">
                        <form class="form-group" action="{{ route("admin.gallery.beforeAfterCreate") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <tr><td>ビフォー写真</td></tr>
                            <tr><td><input type="file" class="form-control" name="before" id="before"></td></tr>
                            <tr><td>アフター写真</td></tr>
                            <tr><td><input type="file" class="form-control" name="after" id="after"></td></tr>
                            <tr><td><button type="submit" class="btn btn-success" style="margin-top:20px;"><span class="fa fa-plus-circle"></span> 写真作成</button></td></tr>
                        </form>
                </table>
                <div class="x_title">
                    <h2>フォームの前後</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>前</th>
                            <th>アフター</th>
                            <th>プロセス</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($gallery as $galleryWrite)
                            <tr>
                                <td><img src="{{ asset("imagesWebp/galleryba")."/".$galleryWrite->imageBeforeWebp }}" width="200" height="150" alt=""></td>
                                <td><img src="{{ asset("imagesWebp/galleryba")."/".$galleryWrite->imageAfterWebp }}" width="200" height="150" alt=""></td>
                                <td>
                                    <a class="btn btn-danger" href="{{ route("admin.gallery.beforeAfterDestroy",["id"=>$galleryWrite->id]) }}"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
@section("script")
    <script src="{{ asset("assets/adminAssets/vendors/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/adminAssets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>

    <script>
        $("#datatable").dataTable();
    </script>

@endsection
