<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
     






 
        <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="  https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 
      <style>
         .nav-md{
         background-color:white;
         width: 107%;
         }
         
         .left_col{
         position: fixed;
         height:100%;
         }
         .fa-bars{
             margin-left:10px;
         }
    
         /* .left_col{
   width:169px;
}
 .nav_title{
   width:169px;
} */
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
                                    <a href="/transactiontables">Search Transaction</a>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a>
                              <i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span>
                              </a>
                              <ul class="nav child_menu">
                                 <!-- <li>
                                    <a href="fixed_sidebar.html">Fixed Sidebar</a>
                                 </li>
                                 <li>
                                    <a href="/datatable">Fixed Footer</a>
                                 </li> -->
                              </ul>
                           </li>
                        </ul>
                     </div>
                     <!-- <div class="menu_section"><h3>Live On</h3></div> -->
                  </div>
                  <!-- /sidebar menu -->
                  <!-- /menu footer buttons -->
                  <!-- <div class="sidebar-footer hidden-small">
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
                     </div> -->
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
            <div class="right_col" role="main">
            <section  style="padding-top:60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header"> 
						<a class="btn btn-danger"   href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash-o fa-lg"></i> Delete selected</a> 
						<a class="btn btn-primary"   href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-download fa-lg" aria-hidden="true"> Excel</i></a> 
						<a class="btn btn-primary"   href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-download fa-lg" aria-hidden="true"> PDF</i></a> 
						<a class="btn btn-primary"   href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-download fa-lg" aria-hidden="true"> CSV</i></a> 
					</div>
						<div class="card-body">
                        <table id="example" class="display tb" style="width:100%">
        <thead>
            <tr>
                <!-- <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th> -->
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Country</th>
                <th>City</th>
                <th>Post code</th>
				<th>Order id</th>
                <th>Bank Status</th>
                <th>Bank Trx Id</th>
				<th>Payment method</th>
                <th>Invoice no</th>
                <th>Sp message</th>
            </tr>
        </thead>
        <tbody>
    
        </tbody>
    </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
      <script src="{{asset('admin_assets/js/custom.js')}}"></script> 
      <script src="cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 
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
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>   -->
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> -->
      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>  
   </body>
</html>