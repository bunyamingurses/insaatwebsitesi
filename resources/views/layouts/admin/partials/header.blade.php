<!-- GÜRSES YAZILIM www.gursesyazilim.com  -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset("assets/adminAssets/vendors/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("assets/adminAssets/vendors/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset("assets/adminAssets/vendors/nprogress/nprogress.css") }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset("assets/adminAssets/vendors/iCheck/skins/flat/green.css") }}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset("assets/adminAssets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css") }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset("assets/adminAssets/vendors/jqvmap/dist/jqvmap.min.css") }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset("assets/adminAssets/vendors/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset("assets/adminAssets/build/css/custom.min.css") }}" rel="stylesheet">
    @yield("style")
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-edge"></i> <small>EVRENONE.COM</small></a>
                </div>

                <div class="clearfix"></div>

                {{--                <!-- menu profile quick info -->--}}
                {{--                <div class="profile clearfix">--}}
                {{--                    <div class="profile_pic">--}}
                {{--                        <img src="{{ asset("assets/adminAssets/production/images/img.jpg")  }}" alt="..." class="img-circle profile_img">--}}
                {{--                    </div>--}}
                {{--                    <div class="profile_info">--}}
                {{--                        <span>Welcome,</span>--}}
                {{--                        <h2>John Doe</h2>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <!-- /menu profile quick info -->--}}

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="{{ route("admin.index") }}"><i class="fa fa-dashboard"></i> ダッシュボード</a></li>
                            <li><a href="{{ route("admin.setting.about") }}"><i class="fa fa-user"></i> 私について</a></li>
                            <li><a><i class="fa fa-image"></i> カルーセル <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route("admin.carousel.index") }}">カルーセル</a></li>
                                    <li><a href="{{ route("admin.carousel.create") }}">カルーセルの作成</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-database"></i> サービス <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route("admin.service.index") }}">サービス</a></li>
                                    <li><a href="{{ route("admin.service.create") }}">サービス作成</a></li>
                                </ul>
                            </li>
                            {{-- <li><a><i class="fa fa-users"></i> スタッフ <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu">--}}
                                    {{--<li><a href="{{ route("admin.team.index") }}">スタッフ</a></li>--}}
                                    {{--<li><a href="{{ route("admin.team.create") }}">人は創造する</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            <li><a><i class="fa fa-image"></i> ギャラリー <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route("admin.gallery.index") }}">ギャラリー</a></li>
                                    <li><a href="{{ route("admin.gallery.beforeAfter") }}">ギャラリー ビフォー/アフター</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route("admin.contact.index") }}"><i class="fa fa-users"></i> 接触</a></li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">

                    <a href="{{ route("admin.setting.index") }}" data-toggle="tooltip" data-placement="top" title="設定">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="ログアウト">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>

                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset("assets/adminAssets/production/images/img.jpg")  }}" alt="">evrenone
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{ route("admin.profile.index") }}">プロフィール</a></li>
                                <li>
                                    <a href="{{ route("admin.setting.index") }}">
                                        <span>設定</span>
                                        <span class="fa fa-cog pull-right"></span>
                                    </a>
                                </li>
                                <li><a href="{{ route("login.logOut") }}"><i class="fa fa-sign-out pull-right"></i>ログアウト</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
