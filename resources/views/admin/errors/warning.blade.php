@if(session()->has('error'))
  						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<h2>Error Saved !</h2>
							<p>{{session()->get('error')}}</p>
							        <ul>
							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
						</div>
@endif
@if(session()->has('success'))
  						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<h2>نجاح</h2>
							<p>{{session()->get('success')}}</p>
						</div>
@endif
@if(session()->has('delete'))
  						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<h2>تم الحذف</h2>
							<p>{{session()->get('delete')}}</p>
						</div>
@endif
@if(session()->has('update'))
  						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<h2>تم التعديل</h2>
							<p>{{session()->get('update')}}</p>
						</div>
@endif
<!-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->