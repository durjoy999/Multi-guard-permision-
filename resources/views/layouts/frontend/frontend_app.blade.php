<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>User Frontend</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="BIR it basic project" name="description" />
        <meta content="bir it" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('photo/settings/general') }}/{{ generalSettings()->favicon }}">

      @include('layouts.frontend.includes.css')

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
           @include('layouts.frontend.includes.header')

            <!-- ========== Left Sidebar Start ========== -->
          @include('layouts.frontend.includes.left_sidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                @yield('frontend_content')
                <!-- End Page-content -->

                
                @include('layouts.frontend.includes.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
       @include('layouts.frontend.includes.right_sidebar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

       @include('layouts.frontend.includes.js')
    </body>
</html>
