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
                        <h2>すべての連絡先</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>名 姓</th>
                                <th>メール</th>
                                <th>主題</th>
                                <th>メッセージ</th>
                                <th>作成日</th>
                                <th>削除する</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contact as $contactWrite)
                                <tr>
                                    <td>{{ $contactWrite->name }}</td>
                                    <td>{{ $contactWrite->email }}</td>
                                    <td>{{ $contactWrite->subject }}</td>
                                    <td>{{ $contactWrite->message }}</td>
                                    <td>{{ $contactWrite->created_at }}</td>
                                    <td><a class="btn btn-danger" href="{{ route("admin.contactDestroy",["id"=>$contactWrite->id]) }}"><span class="fa fa-trash"></span></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>名 姓</th>
                                <th>メール</th>
                                <th>主題</th>
                                <th>メッセージ</th>
                                <th>作成日</th>
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
    </script>

@endsection
