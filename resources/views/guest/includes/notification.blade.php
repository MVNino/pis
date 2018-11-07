@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<label style="padding:20px;background-color: #ed1f1f; width:100%; color:white;">{{$error}}</label>
		{{$error}}
	@endforeach
@endif

@if(session('success'))
	<label style="padding:20px;background-color: #50b41e; width:100%; color:white;">{{session('success')}}</label>
@endif

@if(session('error'))
	<div style="padding:20px;background-color: #ed1f1f; width:100%; color:white;">{{session('error')}}</div>
@endif
