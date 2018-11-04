@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<label style="padding:20px;background-color: #ed1f1f; width:100%; color:white;">Your appointment wasn't able to sent please refresh the page.</label>
		{{$error}}
	@endforeach
@endif

@if(session('success'))
	<label style="padding:20px;background-color: #50b41e; width:100%; color:white;">Your appointment is now sent. Please check your email often to see if your appointment is approve. Thank you!</label>
	{{session('success')}}
@endif

@if(session('error'))
	<label style="padding:20px;background-color: #ed1f1f; width:100%; color:white;">Your appointment wasn't able to sent please refresh the page.</label>
	{{session('error')}}
@endif
