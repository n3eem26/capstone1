<!DOCTYPE html>
<html lang="en" @if(app('lang') == 'ar') dir="rtl" @else dir="ltr" @endif>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Message System</title>
@if(app('lang') == 'ar')
    <?php $langDir = '' ?>
@else
    <?php $langDir = 'en/' ?>

@endif

<!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <!-- jQuery -->
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <link href="{{url('/')}}/admin/{{$langDir}}assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/admin/{{$langDir}}assets/css/icons/fontawesome/styles.min.css" rel="stylesheet"
          type="text/css">
    <link href="{{url('/')}}/admin/{{$langDir}}assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/admin/{{$langDir}}assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/admin/{{$langDir}}assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/admin/{{$langDir}}assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/ui/nicescroll.min.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/forms/selects/bootstrap_select.min.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/uploaders/fileinput.min.js"></script>


    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/pickers/daterangepicker.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/pickers/anytime.min.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/pickers/pickadate/picker.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/pickers/pickadate/picker.time.js"></script>


    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/core/app.js"></script>
    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/layout_fixed_custom.js"></script>
    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/picker_date.js"></script>
    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/form_select2.js"></script>
    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/form_inputs.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/form_bootstrap_select.js"></script>
    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/datatables_basic.js"></script>
    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/uploader_bootstrap.js"></script>
    <!-- /theme JS files -->

    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>


    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/form_multiselect.js"></script>
    <script type="text/javascript"
            src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/forms/selects/selectboxit.min.js"></script>

    <style>
        .page-title {
            padding: 60px 0 8px 6px;
        }

        .navbar-header {
            min-width: 60px;
        }

        .nav > li > a {
            position: relative;
            display: block;
            padding: 9px 10px;
        }

        .navbar-nav {
            margin-top: 4px;
        }
    </style>

    @yield('heads')
</head>


<body class="navbar-top sidebar-xs  pace-done">

@include('admin.include.navbar')


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

    {{--@include('admin.include.sidebar')--}}


    <!-- Main content -->
        <div class="content-wrapper">


            <!-- Page header -->
            <div class="page-header page-header-default">
                {{--<div class="page-header-content">--}}
                {{--<div class="page-title">--}}
                {{--<h4><i class="icon-arrow-right6 position-left"></i> <span--}}
                {{--class="text-semibold">{{trans('admin.login_stat')}}</h4>--}}
                {{--</div>--}}

                {{--<!-- <div class="heading-elements">--}}
                {{--<a href="#" class="btn btn-labeled btn-labeled-right bg-blue heading-btn">Button <b><i class="icon-menu7"></i></b></a>--}}
                {{--</div> -->--}}
                {{--</div>--}}

                <div class="breadcrumb-line">

                    <ul class="breadcrumb">
                        <li><a href="{{url('').'/home'}}"><i
                                        class="icon-home2 position-left"></i> {{trans('admin.main')}}</a></li>
                        @yield('page_header')
                        {{--<li><a href="layout_fixed.html">Starters</a></li>--}}
                        {{--<li class="active">Fixed layout</li>--}}
                    </ul>


                </div>
            </div>


            <!-- Content area -->
            <div class="content">
            @include('admin.errors.warning')
            @yield('page_content')


            <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2017. <a href="#">Message Distribution System</a> by <a href="#"
                                                                                   target="_blank">Sharqway </a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

@yield('foots')

<script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/form_selectbox.js"></script>
<script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/timelines.js"></script>
<script type="text/javascript"
        src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/forms/styling/uniform.min.js"></script>
<script type="text/javascript"
        src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/forms/styling/switchery.min.js"></script>
<script type="text/javascript"
        src="{{url('/')}}/admin/{{$langDir}}assets/js/plugins/forms/styling/switch.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/form_checkboxes_radios.js"></script>

</body>
</html>
