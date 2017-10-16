@extends('admin.paritial.tabel')
@section('page_header')
    <label style="display: none;">{{app('lang')}}</label>
    <li class="active">{{trans('admin.users')}}</li>

@stop


@section('table_content')


    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Messages Count</th>
        <th>Chat</th>
    </tr>
    </thead>

@stop


@section('table_before')

    <button type="button" class="btn bg-teal btn-sm" data-toggle="modal" data-target="#modal_form_vertical"
            id="onshown_callback">Send Multi <i class="icon-play3 position-right"></i></button>
    <div id="modal_form_vertical" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title">Send Message to Multi</h5>
                </div>

                <form method="post">
                    <div class="modal-body">

                        <div class="form-group">
                            <label><span class="text-semibold">Filtering</span> option</label>
                            <div class="multi-select-full">
                                <select class="multiselect-filtering" multiple="multiple" name="users" required>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                                <textarea name="body" class="form-control content-group" rows="3" cols="1"
                                          required
                                          placeholder="Enter your message..."></textarea>

                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('table_footer')

    <script type="text/javascript">

        $(function () {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url("home/user-data") }}'
            });
        });

    </script>

@stop



@section('table_before')

@stop
