@extends("layouts.admin.index")
@section("style")
    <link href="{{ asset("assets/adminAssets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css") }}" rel="stylesheet">

@endsection
@section("content")

    <div class="col-md-12 col-sm-12 col-xs-12">
        @if(session("status"))
            <div class="alert alert-info"> {{ session("status") }}</div>
        @endif
        <div class="x_panel">
            <div class="x_title">
                <h2>
                    写真作成<br><br>
                    <form action="{{ route("admin.gallery.create") }}" enctype="multipart/form-data"method="post">
                        @csrf
                        <input type="file" class="form-control" name="foto[]" multiple id="foto"><br>
                        <button type="submit" class="btn btn-success">写真作成</button>
                    </form>
                </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-lg-12">
                    @foreach($gallery as $galleryWrite)


                        <div class="col-lg-3 card" style="margin-top:20px; background-color:#F7F7F7; border: 2px solid white; padding:0;">
                            <img src="{{ asset("imagesWebp/gallery/")."/".$galleryWrite->imageWebp }}" class="card-img" width="100%" height="200" alt="">
                            <div class="card-body">
                                <a href="{{ route("admin.gallery.destroy",["id"=>$galleryWrite->id]) }}" class="btn btn-danger" style="margin-top:20px;"><span class="fa fa-times-circle-o"></span> この写真を削除</a>
                            </div>
                        </div>





                    @endforeach
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
