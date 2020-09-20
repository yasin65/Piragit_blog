@if($errors->any())
<div class="alert alert-danger">
<u>
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
</u>
</div>
@endif