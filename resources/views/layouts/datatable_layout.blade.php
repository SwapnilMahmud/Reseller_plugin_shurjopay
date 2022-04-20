<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>@yield('page_title')</title>
    <link rel="shortcut icon" href="{{asset('admin_panel_assets/Image/shurjopay-small.png')}}" />
    <!-- Bootstrap -->
    <link href="{{asset('admin_panel_assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin_panel_assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin_panel_assets/vendors/nprogress/nprogress.css" rel="stylesheet')}}">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('admin_panel_assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('admin_panel_assets/build/css/custom.min.css')}}" rel="stylesheet">
    <style>
    .container{
        margin-top:100px;
        margin-left:5px;
    }
    .dataTables_filter{
       margin-right:700px;
      
    } 
    .form-control{
      border:2px solid mediumseagreen;
    }
</style>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">
                <img src="{{asset('admin_panel_assets/Image/shurjopay-small.png')}}" style="width:40px; height:40px; margin-top:4px;">
                <span> shurjoPay</span>
              </a>
            </div>
            <div class="clearfix"></div>
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!-- <h3>General</h3> -->
                <ul class="nav side-menu">
                  <li>
                    <a href="https://admin.shurjopayment.com">
                      <i class="nav-icon fa fa-th"></i>
                      <strong>Dashboard</strong>
                    </a>
                  </li>
                  <li>
                    <a>
                      <i class="fa fa-credit-card"></i>Transaction <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li>
                        <a href="/bookd">Search Transaction</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a>
                      <i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li>
                        <a href="fixed_sidebar.html">Fixed Sidebar</a>
                      </li>
                      <li>
                        <a href="fixed_footer.html">Fixed Footer</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <!-- <div class="menu_section"><h3>Live On</h3></div> -->
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{url('admin/logout')}}">
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
              <a id="menu_toggle">
                <i class="fa fa-bars"></i>
              </a>
            </div>
            <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('admin_panel_assets/Image/avatar4.png')}}" class="img-circle" alt="profile picture" width="30px" height="30px">
                    <span style="margin-left:5px">Spay</span>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('admin/logout')}}">
                      <i class="fa fa-sign-out pull-right"></i> Log Out </a>
                  </div>
                </li>
              </ul>                                                             
            </nav>
          </div>
        </div>
       
      </div>
    </div>
    <!-- footer content -->
    <footer class="main-footer" align="center">
      <strong>
        <hr>
      </strong>
      <strong id="demo">Copyright © 2022 <a href="#" style="color: #006400" target="_blank">shurjoPay Ltd.</a>
      </strong> All rights reserve
    </footer>
    <!-- /footer content -->
    <!-- jQuery -->
    <script src="{{asset('admin_panel_assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin_panel_assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin_panel_assets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('admin_panel_assets/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('admin_panel_assets/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{asset('admin_panel_assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('admin_panel_assets/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin_panel_assets/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin_panel_assets/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin_panel_assets/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin_panel_assets/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('admin_panel_assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('admin_panel_assets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('admin_panel_assets/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('admin_panel_assets/vendors/DateJS/build/date.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('admin_panel_assets/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('admin_panel_assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('admin_panel_assets/build/js/custom.min.js')}}"></script>
  </body>
</html>