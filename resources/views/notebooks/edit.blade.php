@extends('layout.base')
@section('content')

<div class="container">
<h1>Edit Notebooks</h1>

<form action="{{route('notebooks.update',$notebook->id)}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
	<div class="form-group">
	<label for="name">Notebook Name</label>
	<input class="form-control" type="text" name="name">
	

	</div>
	<input class="btn btn-primary" type="submit" value="Update">
	
</form>
</div>

@endsection