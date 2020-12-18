<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    @include('parsialguest.css')

</head>

<body id="page-top">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @yield('container')

                @include('parsialguest.footer')
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->


        @include('parsialguest.js')
</body>

</html>
