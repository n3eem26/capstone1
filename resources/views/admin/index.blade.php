@extends('admin.include.app')


@section('page_content')
    <!-- Basic datatable -->
    <div class=" ">
        <div class="col-md-12">
            <div class="panel-heading">
                <label style="display: none;">{{app('lang')}}</label>
            </div>


            @if(\Illuminate\Support\Facades\Auth::user()->membership=='admin')
                @include('admin.userReportes.admin_home')
            @else
                @include('admin.userReportes.user_home')
            @endif

        </div>
        <!-- /basic datatable -->

@stop