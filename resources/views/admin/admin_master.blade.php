<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title> Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <link rel="shortcut icon" href=" {{asset('backend/assets/images/favicon.svg')}}">

     {{-- {{ asset('backend/') }} --}}
    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/bootstrap/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/overlay-scroll/OverlayScrollbars.min.css')}}">

    </head>

    <!-- body start -->
    <body data-menu-color="light" data-sidebar="default">

        <!-- Page wrapper start -->
    <div class="page-wrapper">
        <!-- Begin page -->
        <div class="main-container">

       <div class="app-container">
            <!-- Topbar Start -->
    @include('admin.body.header')
            <!-- end Topbar -->
    @include('admin.body.sidebar')
            <!-- Left Sidebar Start -->
           
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                @yield('admin')

                <!-- content -->

                <!-- Footer Start -->
                @include('admin.body.footer')
                <!-- end Footer -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

           <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('backend/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('backend/assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/common/sparkline.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/dash1/sales-report.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/dash1/visitors.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/dash1/sparkline.js') }}"></script>

    <!-- Custom JS files -->
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 
 <script src="{{ asset('backend/assets/js/code.js') }}"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>

    </body>
</html>