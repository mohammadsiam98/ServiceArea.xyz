<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('anotherassets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('anotherassets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{asset('anotherassets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />

    <!-- third party css -->
    <link href="{{asset('anotherassets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('anotherassets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('anotherassets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>


    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <!-- LOGO -->
            <div class="logo-box">
                <a href="#" class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{asset('anotherassets/images/logo-light.png')}}" alt="" height="25">
                        <!-- <span class="logo-lg-text-light">UBold</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">U</span> -->
                        <img src="{{asset('anotherassets/images/logo-sm.png')}}" alt="" height="28">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                    </button>
                </li>

            </ul>
        </div>
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title" style="font-size: 26px;">Components</li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="fe-box"></i>
                                <span style="font-size: 20px;">Contact</span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('admin.contact.list')}}">List</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        @yield('content')

        <script src="{{asset('anotherassets/js/pages/dashboard.init.js')}}"></script>

        <!-- Vendor js -->
        <script src="{{asset('anotherassets/js/vendor.min.js')}}"></script>

        <script src="{{asset('anotherassets/libs/jquery-ui/jquery-ui.min.js')}}"></script>


        <!-- Required datatable js -->
        <script src="{{asset('anotherassets/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('anotherassets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('anotherassets/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('anotherassets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('anotherassets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('anotherassets/libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('anotherassets/libs/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{asset('anotherassets/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('anotherassets/libs/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('anotherassets/libs/datatables/buttons.colVis.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{asset('anotherassets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('anotherassets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatables init -->
        <script src="{{asset('anotherassets/js/pages/datatables.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('anotherassets/js/app.min.js')}}"></script>

</body>
</html>
