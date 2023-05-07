<!DOCTYPE html>
<html>
    <head>
        @include('backend.layouts.head')
    </head>
    <body class="landing-page app sidebar-mini pace-done pace-done">
        <!-- Navbar-->
        @include('backend.layouts.header')

        <!-- Sidebar menu-->
        @include('backend.layouts.sidebar')

        <main class="app-content">
            @yield('app-title-admin')
            @yield('content-admin')
        </main>

    </body>

    @include('backend.layouts.script')
</html>
