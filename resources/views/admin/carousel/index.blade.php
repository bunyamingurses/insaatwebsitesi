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
                <h2>すべてのカルーセル</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>画像</th>
                        <th>タイトル</th>
                        <th>叙述</th>
                        <th>チケット</th>
                        <th>プロセス</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carousel as $carouselWrite)
                        <tr>
                            <td><img src="{{ asset("imagesWebp/carousel")."/".$carouselWrite->imageWebp }}" width="100" alt=""></td>
                            <td>{{ $carouselWrite->title }}</td>
                            <td>{{ $carouselWrite->description }}</td>

                            <td>
                                @php
                                    $etiket=explode(",",$carouselWrite->ticket);
                                @endphp
                                @foreach ($etiket as $etiketYaz)
                                    <span class="badge badge-success bg-blue">{{ $etiketYaz }}</span>

                                @endforeach

                            <td>
                                <a class="btn btn-primary" href="{{ route("admin.carousel.edit",["id"=>$carouselWrite->id]) }}"><span class="fa fa-edit"></span></a>
                                <a class="btn btn-danger" href="{{ route("admin.carousel.destroy",["id"=>$carouselWrite->id]) }}"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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
