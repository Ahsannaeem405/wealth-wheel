<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head id="Head1" runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset($setting['favicon'] ?? '')  }}">
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/extensions/tether.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/themes/semi-dark-layout.css') }}">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/dashboard/app-assets/vendors/css/forms/select/select2.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/dashboard/app-assets/vendors/css/forms/select/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" type="text/css" href="{{asset('userSite/dashboard/app-assets/css/plugins/extensions/noui-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/dashboard/app-assets/css/core/colors/palette-noui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/dashboard/app-assets/css/pages/data-list-view.css')}}">


    <style>
        .error{
            color: red !important;
        }
        .showtd_image{
            width: 100px;
            height: 100px;
        }
    </style>

    @yield('css')

</head>

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Navbar-->
@include('dashboard.layouts.navbar')
<!--End: Navbar-->

<!-- BEGIN: Sidebar-->
@include('dashboard.layouts.sidebar')
<!-- END: Sidebar-->


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<script src="{{ asset('userSite/dashboard/app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/vendors/js/charts/apexcharts.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/js/scripts/datatables/datatable.js') }}"></script>


<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/dataTables.select.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script src="{{asset('userSite/dashboard/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>

<script src="{{ asset('userSite/dashboard/app-assets/vendors/js/extensions/tether.min.js') }}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/js/core/app.js') }}"></script>
{{--    <script src="{{ asset('admin/vendors/js/forms/select/select2.full.min.js')}}"></script>--}}
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/js/scripts/components.js') }}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/js/scripts/ui/data-list-view.js') }}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
{{--    <script src="{{ asset('admin/js/scripts/forms/select/form-select2.js')}}"></script>--}}


<script src="{{asset('userSite/dashboard/app-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/js/scripts/forms/wizard-steps.js')}}"></script>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script>

    $('.dropify').dropify();
</script>
<script>
    $(document).ready(function () {
        $('#validationForm').validate();
    });

    $('.delete').click(function () {

        var url = $(this).attr('url');

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this record!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                location.href = url;
            } else {

            }
        });
    });
</script>

<script>

    @if(session('success'))
    toastr.success("{{ session('success') }}");
    @elseif(session('error'))
    toastr.error("{{ session('error') }}");
    @endif
    @foreach ($errors->all() as $error)
    toastr.error("{{ $error }}");

    @endforeach


</script>



@yield('js')

</body>
<!-- END: Body-->

</html>
