<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('admin/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title> </title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{url('/a-panel')}}">Bukhara</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="{{url('/a-panel')}}">Admin</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @yield('products')" href="{{route('offer.index')}}"><i class="fab fa-product-hunt"></i> Products <span class="badge badge-success"></span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @yield('statistics')" href="{{route('statistics.index')}}"><i class="fas fa-sort-numeric-up-alt"></i> Statistics <span class="badge badge-success"></span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @yield('orders')" href="{{route('orders.index')}}"><i class="fas fa-shopping-cart"></i> Orders <span class="badge badge-success"></span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @yield('partners')" href="{{route('partners.index')}}"><i class="fas fa-handshake"></i> Partners <span class="badge badge-success"></span></a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content main-table">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Admin panel </h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{url('/a-panel')}}" class="breadcrumb-link">Admin</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div style="width: 95%; margin: 20px auto;">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->

            
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{asset('admin/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('admin/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('admin/assets/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{asset('admin/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{asset('admin/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{asset('admin/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <script src="{{asset('admin/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{asset('admin/assets/libs/js/dashboard-ecommerce.js')}}"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>;
</body>
 
</html>