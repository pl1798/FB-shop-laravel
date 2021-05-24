<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>
    <!-- Bootstrap -->
    <link href="{{asset('/theme_admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/theme_admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('/theme_admin/build/css/custom.min.css')}}" rel="stylesheet">

    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css')}}">
    <link href="{{asset('/theme_admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="data:image/jpeg;base64,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" alt="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a href="{{route('admin.get.list.category',['tab'=>'danh mục'])}}"><i class="fa fa-edit"></i>Danh mục</a>
                    </li>
                    <li>
                        <a href="{{route('admin.get.list.product',['tab'=>'sản phẩm'])}}"><i class="fa fa-edit"></i>Sản phẩm</a>
                    </li>
                    <li>
                        <a href="{{route('admin.get.list.inform',['tab'=>'tin tức'])}}"><i class="fa fa-edit"></i>Tin tức</a>
                    </li>
                    <li>
                        <a href="{{route('admin.get.list.order',['tab'=>'đơn hàng'])}}"><i class="fa fa-edit"></i>Đơn Hàng</a>
                    </li>
                    <li>
                        <a href="{{route('admin.get.list.member',['tab'=>'thành viên'])}}"><i class="fa fa-edit"></i>Thành viên</a>
                    </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('theme_admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('/theme_admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('/theme_admin/vendors/DateJS/build/date.js')}}"></script>
    <!-- Datatables -->
    <script src="{{asset('/theme_admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/theme_admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('/theme_admin/build/js/custom.min.js')}}"></script>
	
  </body>
</html>