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
                <h2>チーム全体</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table id="datatable" class="table table-striped table-bordered table-hover table-responsive-lg">
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
                    @foreach($team as $teamWrite)
                        <tr>
                            <td><img src="{{ asset("imagesWebp/team")."/".$teamWrite->imageWebp }}" width="100" alt=""></td>
                            <td>{{ $teamWrite->name }}</td>
                            <td>{{ $teamWrite->job }}</td>
                            @if($teamWrite->isPopular==1)
                                <td><a class="btn btn-success" href="{{ route("admin.team.popular",["id"=>$teamWrite->id]) }}"><span class="fa fa-check-circle-o" style="font-size: 20px;"></span></a></td>
                            @else
                                <td><a class="btn btn-success" href="{{ route("admin.team.popular",["id"=>$teamWrite->id]) }}"><span class="fa fa-times-circle-o"></span></a></td>
                            @endif
                            <td>
                                <a class="btn btn-primary" href="{{ route("admin.team.edit",["id"=>$teamWrite->id]) }}"><span class="fa fa-edit"></span></a>
                                <a class="btn btn-danger" href="{{ route("admin.team.destroy",["id"=>$teamWrite->id]) }}"><span class="fa fa-trash"></span></a>
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
