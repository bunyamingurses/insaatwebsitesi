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
                <div class="x_title">
                    <h2>履歴書ファイル</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>名 姓</th>
                            <th>メール</th>
                            <th>番号</th>
                            <th>履歴書ファイル</th>
                            <th>C作成日</th>
                            <th>削除する</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($career as $careerWrite)
                            <tr>
                                <td>{{ $careerWrite->name }}</td>
                                <td>{{ $careerWrite->email }}</td>
                                <td>{{ $careerWrite->number }}</td>
                                <td>
                                    <a class="btn btn-success" target="_blank" href="{{ asset("cvFiles/")."/".$careerWrite->fileName }}"><span class="fa fa-file-pdf-o"></span></a>
                                </td>
                                <td>{{ $careerWrite->created_at }}</td>
                                <td><a class="btn btn-danger" href="{{ route("admin.careerDestroy",["id"=>$careerWrite->id]) }}"><span class="fa fa-trash"></span></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>名 姓</th>
                            <th>メール</th>
                            <th>番号</th>
                            <th>履歴書ファイル</th>
                            <th>C作成日</th>
                            <th>削除する</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>


            <div class="x_panel">
                <div class="x_title">
                    <h2>Partnerships</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable2" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>名 姓</th>
                            <th>メール</th>
                            <th>番号</th>
                            <th>セクタ</th>
                            <th>メッセージ</th>
                            <th>C作成日</th>
                            <th>削除する</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($careerps as $careerpsWrite)
                            <tr>
                                <td>{{ $careerpsWrite->name }}</td>
                                <td>{{ $careerpsWrite->email }}</td>
                                <td>{{ $careerpsWrite->number }}</td>
                                <td>{{ $careerpsWrite->sector }}</td>
                                <td>{{ $careerpsWrite->message }}</td>
                                <td>{{ $careerpsWrite->created_at }}</td>
                                <td><a class="btn btn-danger" href="{{ route("admin.partnershipDestroy",["id"=>$careerpsWrite->id]) }}"><span class="fa fa-trash"></span></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>名 姓</th>
                            <th>メール</th>
                            <th>番号</th>
                            <th>セクタ</th>
                            <th>メッセージ</th>
                            <th>C作成日</th>
                            <th>削除する</th>
                        </tr>
                        </tfoot>
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
        $("#datatable2").dataTable();
    </script>

@endsection
