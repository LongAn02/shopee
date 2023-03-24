<!DOCTYPE html>
<html>
    <head>
        @include('backend.layouts.head')
    </head>
    <body class="landing-page">
        <!-- Navbar-->
        @include('backend.layouts.header')

        <!-- Sidebar menu-->
        @include('backend.layouts.sidebar')

        @yield('content')
    </body>

    @include('backend.layouts.script')
</html>
