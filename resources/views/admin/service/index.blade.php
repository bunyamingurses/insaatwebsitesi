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
                <h2>すべてのサービス</h2>
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
                        <th>人気のある</th>
                        <th>プロセス</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($service as $serviceWrite)
                        <tr>
                            <td><img src="{{ asset("imagesWebp/services")."/".$serviceWrite->imagesWebp }}" width="100" alt=""></td>
                            <td>{{ $serviceWrite->title }}</td>
                            <td>{{ $serviceWrite->text }}</td>
                            @if($serviceWrite->isPopular==1)
                                <td><a class="btn btn-success" href="{{ route("admin.service.popular",["id"=>$serviceWrite->id]) }}"><span class="fa fa-check-circle-o"></span></a></td>
                            @else
                                <td><a class="btn btn-success" href="{{ route("admin.service.popular",["id"=>$serviceWrite->id]) }}"><span class="fa fa-times-circle-o"></span></a></td>
                            @endif
                            <td>
                                <a class="btn btn-primary" href="{{ route("admin.service.edit",["id"=>$serviceWrite->id]) }}"><span class="fa fa-edit"></span></a>
                                <a class="btn btn-danger" href="{{ route("admin.service.destroy",["id"=>$serviceWrite->id]) }}"><span class="fa fa-trash"></span></a>
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
