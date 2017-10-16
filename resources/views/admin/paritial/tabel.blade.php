@extends('admin.include.app')

@section('heads')
    @if(app('lang') == 'ar')
        <?php $langDir = '' ?>
    @else
        <?php $langDir = 'en/' ?>

    @endif


    <link href="{{url('/')}}/admin/assets/tabel/extra.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/')}}/admin/assets/datatables/datatables.min.css" rel="stylesheet"
          type="text/css"/>

    <link href="{{url('/')}}/admin/assets/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css"
          rel="stylesheet" type="text/css"/>
    @yield('table_css')
@stop
@section('page_content')

    @include('admin.errors.error')
    <label style="display: none;">{{app('lang')}}</label>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <div class="table-toolbar">

                        <div class="row">
                            @yield('table_before')
                        </div>
                    </div>
                    <div>

                        <table class="table table-striped table-bordered table-hover"
                               id="table">
                            @yield('table_content')
                        </table>

                    </div>

                    @yield('table_after')
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>

@stop



@section('foots')
    @yield('table_footer')

    <script src="{{url('/')}}/admin/assets/tabel/table-datatables-managed.min.js"
            type="text/javascript">
    </script>

    <script src="{{url('/')}}/admin/assets/datatables/jquery.dataTables.min.js">
    </script>

    <script src="{{url('/')}}/admin/assets/datatables/plugins/bootstrap/datatables.bootstrap.js"></script>


@stop


