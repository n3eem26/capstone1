<label style="display: none;">{{app('lang')}}</label>

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            @if(isset($create))
                                <div class="btn-group">
                                    <a href="{{ Request::url() }}/create">
                                        <button id="sample_editable_1_new"
                                                class="btn sbold green">{{trans('admin.add')}}
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div>

                    <table class="table table-striped table-bordered table-hover"
                           id="{{$id}}">
                        @yield('table_content')
                    </table>

                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>