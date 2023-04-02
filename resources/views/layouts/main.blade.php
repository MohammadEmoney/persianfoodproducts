<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.head')
        @livewireStyles
    </head>
    <body id="page-top" dir="{{ App::isLocale('fa') ? "rtl" : "" }}">
        <!-- Navigation-->
        @include('layouts.partials.nav')
        <!-- Masthead-->
        <!-- Portfolio Section-->
        @yield('content')
        <!-- Footer-->
        @include('layouts.partials.footer')
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; {{ env('APP_NAME') }} {{ now()->year }}</small></div>
        </div>
        <!-- Bootstrap core JS-->
        @include('layouts.partials.script')
        @livewireScripts
        <livewire:notification-sweet-alert />
    </body>
</html>
