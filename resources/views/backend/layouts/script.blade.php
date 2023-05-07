<!-- Essential javascripts for application to work-->
<script src="{{ asset('backend/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('toastr/toastr.min.js') }}"></script>
<script src="{{ asset('backend/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/main.js') }}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{ asset('backend/js/plugins/pace.min.js') }}"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="{{ asset('backend/js/plugins/chart.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/js-theme.js') }}"></script>
<!-- Common javascripts-->
<script type="module" src="{{ asset('common/app.js') }}"></script>
@yield('addJS')
