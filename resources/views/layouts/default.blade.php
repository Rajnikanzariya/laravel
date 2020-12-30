<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <!-- Start Page Loading -->
        <div id="loader-wrapper">
            <div id="loader"></div>        
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- End Page Loading -->

        <!-- START HEADER -->
        <header id="header" class="page-topbar">
            @include('includes.header')
        </header>
        <!-- START MAIN -->
        <div id="main">
            <!-- START WRAPPER -->
            <div class="wrapper">
                @include('includes.leftmenu')

                @yield('content')
            </div>
        </div>
            @include('includes.footer')
    </body>
</html>