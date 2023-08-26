<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @include('backend.includes.header')

    <body>

        <div id="wrapper">

            @include('backend.includes.navbar')

            @include('backend.includes.menu')

            <div class="content-page">
                <div class="content">

                    @yield('content')

                </div> <!-- content -->

                @include('backend.includes.footer')

            </div>

        </div>

        @include('backend.includes.right_bar')

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/flot-charts/jquery.flot.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{ asset('backend/assets/js/pages/dashboard-1.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>

        <!-- Common js -->
        <script src="{{ asset('backend/assets/js/general.js') }}"></script>

          <!-- Sweetalert -->
        @include('sweetalert::alert')

        @yield('js')

    </body>
</html>
