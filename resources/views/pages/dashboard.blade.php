@extends('layouts.admin_layout')
@section('content')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">


                            </ol>
                        </div>
                        <h4 class="page-title">Admin Dashboard</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

        </div> <!-- end container-fluid -->

    </div>

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    2020-2021 &copy; All Rights Reserved By <a href="{{route('admin.dashboard')}}">Salahuddin IT</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->

@endsection
