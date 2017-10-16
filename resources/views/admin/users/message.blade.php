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

            <div class="timeline timeline-left content-group">
                <div class="timeline-container">


                    <div class="timeline-row">
                        <div class="timeline-icon">
                            <div class="bg-info-400">
                                <i class="icon-comment-discussion"></i>
                            </div>
                        </div>

                        <div class="panel panel-flat timeline-content">
                            <div class="panel-heading">
                                <h6 class="panel-title">Conversation with {{$user->name}}</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-circle-down2"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-user-lock"></i> Delete All Message</a>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <ul class="media-list chat-list content-group">
                                    {{--<li class="media date-step">--}}
                                    {{--<span>Today</span>--}}
                                    {{--</li>--}}


                                    @foreach($messages as $message)
                                        @if($message->sender_id ==$user->id)
                                            <li class="media">
                                        @else
                                            <li class="media reversed">
                                                @endif


                                                <div class="media-body">
                                                    <div class="media-content">{{$message->body}}.
                                                    </div>
                                            <span class="media-annotation display-block mt-10">{{$message->created_at}}
                                                <a href="#"><i
                                                            class="icon-pin-alt position-right text-muted"></i></a></span>
                                                </div>
                                            </li>


                                            @endforeach
                                            @for($i=0;$i<100;$i++)


                                            @endfor

                                </ul>

                                <form method="post">
                                <textarea name="body" class="form-control content-group" rows="3" cols="1"
                                          required
                                          placeholder="Enter your message..."></textarea>

                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="row">


                                        <div class="col-xs-6 text-left">
                                            <button style="padding-left: 43px;" type="submit"
                                                    class="btn bg-teal-400 btn-labeled btn-labeled-right"><b
                                                        style="left: 0px;right: auto;"><i class="icon-circle-left2"></i></b>
                                                Send
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /messages -->


                </div>
            </div>
        </div>
    </div>

@stop



@section('foots')
    <script type="text/javascript" src="{{url('/')}}/admin/{{$langDir}}assets/js/pages/user_pages_profile.js"></script>
@stop


