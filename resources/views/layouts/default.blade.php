<!DOCTYPE html>
<html>
    @include('includes.head')

    <body class="bg-gray-100">
        @include('includes.header')

        @yield('content')

        @include('includes.footer')
    </body>
</html>
