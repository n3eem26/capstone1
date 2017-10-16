<!-- Main navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="{{url('/')}}/admin/assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            @include('admin.include.navbar_links')

        </ul>

        <ul class="nav navbar-nav navbar-right">


            <li><a href="{{url('/home/logout')}}"><i
                            class="icon-switch2 position-left"></i> Logout {{' '}}
                    ({{auth()->user()->name}})
                </a></li>


        </ul>
    </div>
</div>
<!-- /main navbar -->