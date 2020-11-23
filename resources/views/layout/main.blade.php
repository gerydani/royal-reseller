<!DOCTYPE html>
<html>
    @include('layout.head')


    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <header id="topnav">
            @include('layout.header')


            {{-- @include('layout.sidebar') --}}
            @include('layout.navigation')
            </header>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="wrapper">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        @yield('content')

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2019 Royal Warehouse
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


       @include('layout.js')

    </body>
</html>
