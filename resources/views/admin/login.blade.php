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
                    <div class="col-md-4">
                    </div>
                    <div class="content  col-md-4">

                        <div class="tabbable panel login-form width-400">
                            <ul class="nav nav-tabs nav-justified" style="padding: 0px;">
                                <li class="active"><a href="#basic-tab1" data-toggle="tab"><h6><i
                                                    class="icon-checkmark3 position-left"></i> Already a user?</h6></a>
                                </li>
                                <li><a href="#basic-tab2" data-toggle="tab"><h6><i class="icon-plus3 position-left"></i>
                                            Create an account</h6></a></li>
                            </ul>




                            @include('admin.errors.warning')




                            <div class="tab-content panel-body">
                                <div class="tab-pane fade {{$active=='login'?"in active ":""}}" id="basic-tab1">



                                    <form method="post" action="{{url('login')}}">
                                        <div class="text-center">
                                            <div class="icon-object border-slate-300 text-slate-300"><i
                                                        class="icon-reading"></i></div>
                                            <h5 class="content-group">{{trans('admin.login_stat')}}
                                                <small class="display-block">{{trans('admin.login_credentials')}}</small>
                                            </h5>
                                        </div>


                                        <div class="form-group has-feedback has-feedback-left">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                            <div class="form-control-feedback">
                                                <i class="icon-user text-muted"></i>
                                            </div>
                                        </div>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="form-group has-feedback has-feedback-left">
                                            <input type="password" class="form-control" name="password" placeholder="Password"
                                                   required>
                                            <div class="form-control-feedback">
                                                <i class="icon-lock2 text-muted"></i>
                                            </div>
                                        </div>



                                        <div class="form-group login-options">
                                            <div class="row">
                                                <div class="col-sm-6">

                                                </div>

                                                <div class="col-sm-6 text-right">
                                                    <a href="{{url('forget')}}">Forgot password?</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn bg-blue btn-block">Login <i
                                                        class="icon-arrow-left13 position-right"></i></button>
                                        </div>
                                    </form>


                                </div>

                                <div class="tab-pane  fade {{$active=='signup'?"in active":""}}" id="basic-tab2">
                                    <form method="post" action="{{url('signup')}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">



                                        <div class="text-center">
                                            <div class="icon-object border-success text-success"><i
                                                        class="icon-plus3"></i></div>
                                            <h5 class="content-group">Create new account
                                                <small class="display-block">All fields are required</small>
                                            </h5>
                                        </div>

                                        <div class="form-group has-feedback has-feedback-left">
                                            <input type="text" class="form-control" placeholder="Your username" name="name" required>
                                            <div class="form-control-feedback">
                                                <i class="icon-user-check text-muted"></i>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback has-feedback-left">
                                            <input type="password" class="form-control" placeholder="Create password" name="password" required>
                                            <div class="form-control-feedback">
                                                <i class="icon-user-lock text-muted"></i>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback has-feedback-left">
                                            <input type="email" class="form-control" placeholder="Your email" name="email" required>
                                            <div class="form-control-feedback">
                                                <i class="icon-mention text-muted"></i>
                                            </div>
                                        </div>



                                        <button type="submit" class="btn bg-indigo-400 btn-block">Register <i
                                                    class="icon-circle-left2 position-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>
        <!-- /page container -->

</body>
</html>
