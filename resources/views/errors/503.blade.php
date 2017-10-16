<!DOCTYPE html>
<html lang="en" @if(app('lang') == 'ar') dir="rtl" @else dir="ltr" @endif>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="{{url('/')}}/admin/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/admin/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/admin/assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/admin/assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/admin/assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{url('/')}}/admin/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/admin/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/admin/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/admin/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->


    <!-- Theme JS files -->
    <script type="text/javascript" src="{{url('/')}}/admin/assets/js/core/app.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    @if(app('lang') == 'ar')
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><img src="{{url('/')}}/admin/assets/images/logo_light.png"
                @else
                    <div class="navbar-header pull-right">
                        <a class="navbar-brand pull-right" href="{{url(''.'Login')}}"><img
                                    src="{{url('/')}}/admin/assets/images/logo_light.png"
                                    @endif
                                    alt=""></a>

                        <ul class="nav navbar-nav pull-right visible-xs-block">
                            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a>
                            </li>
                        </ul>
                    </div>


        </div>
        <!-- /main navbar -->


        <!-- Page container -->
        <div class="page-container login-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main content -->
                <div class="content-wrapper">

                    <!-- Error wrapper -->
                    <div class="container-fluid text-center">
                        <h1 class="error-title">503</h1>
                        <h6 class="text-semibold content-group">{{trans('admin.notAvailable')}}</h6>


                    </div>
                    <!-- /error wrapper -->

                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2017. <a href="#">Sms Distribution System</a> by <a href="#" target="_blank">Sms</a>
                    </div>
                    <!-- /footer -->

                </div>
                <div class="col-md-4"></div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
