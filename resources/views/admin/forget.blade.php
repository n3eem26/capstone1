<!DOCTYPE html>
<html lang="en" @if(app('lang') == 'ar') dir="rtl" @else dir="ltr" @endif>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authorization System</title>

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
                        <a class="navbar-brand pull-right" href="index.html"><img
                                    src="{{url('/')}}/admin/assets/images/logo_light.png"
                                    @endif
                                    alt=""></a>

                        <ul class="nav navbar-nav pull-right visible-xs-block">
                            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="navbar-collapse collapse" id="navbar-mobile">
                        @if(app('lang') == 'ar')
                            <ul class="nav navbar-nav navbar-right">
                                @else
                                    <ul class="nav navbar-nav navbar-left">
                                        @endif
                                        <li class="dropdown language-switch">
                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                @if(app('lang') == 'ar')
                                                    <img src="{{url('/')}}/admin/assets/images/flags/ps.png"
                                                         class="position-left" alt="">
                                                    عربي
                                                    <span class="caret"></span>
                                                @else
                                                    <img src="{{url('/')}}/admin/assets/images/flags/gb.png"
                                                         class="position-left" alt="">
                                                    English
                                                    <span class="caret"></span>
                                                @endif
                                            </a>

                                            <ul class="dropdown-menu">
                                                @if(app('lang') == 'ar')
                                                    <li><a class="deutsch" href="{{url('/lang/en')}}"><img
                                                                    src="{{url('/')}}/admin/assets/images/flags/gb.png"
                                                                    alt="">English</a></li>
                                                @else
                                                    <li><a class="deutsch" href="{{url('/lang/ar')}}"><img
                                                                    src="{{url('/')}}/admin/assets/images/flags/ps.png"
                                                                    alt=""> عربي</a></li>
                                                @endif
                                            </ul>
                                        </li>

                                    </ul>

                    </div>
        </div>
        <!-- /main navbar -->


        <!-- Page container -->
        <div class="page-container login-container">

            <!-- Page content -->
            <div class="page-content" >

                <!-- Main content -->
                <div class="content-wrapper" style="margin-top: 50px;padding-top: 70px;">
                    <div class="col-md-4"></div>
                    <div class="content  col-md-4">


                        <form method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="panel panel-body login-form">
                                <div class="text-center">
                                    <div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
                                    <h5 class="content-group">Password recovery <small class="display-block">We'll send you instructions in email</small></h5>
                                </div>

                                <div class="form-group has-feedback">
                                    <input type="email" class="form-control" placeholder="Your email">
                                    <div class="form-control-feedback">
                                        <i class="icon-mail5 text-muted"></i>
                                    </div>
                                </div>

                                <button type="submit" class="btn bg-blue btn-block">Reset password <i class="icon-arrow-left13 position-right"></i></button>
                            </div>
                        </form>
                    </div>



                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>
        <!-- /page container -->

</body>
</html>
