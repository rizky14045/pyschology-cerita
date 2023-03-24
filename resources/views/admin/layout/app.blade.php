<!doctype html>
<html lang="en">
    @include('admin.partials.head')
    @yield('styles')
    <body data-sidebar="colored">


        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">
            {{-- @include('admin.partials.head') --}}
            @include('admin.partials.header')
            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.partials.left-sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                       @yield('content')
                        <!-- end row -->


                </div>
                <!-- End Page-content -->

                
               {{-- Footer --}}
               @include('admin.partials.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        @include('admin.partials.right-sidebar')

                             
        <!-- JAVASCRIPT -->
        @include('admin.partials.scripts')

        

    </body>
</html>
