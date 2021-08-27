@extends('admin.layout')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card card-primary card-outline">
			<div class="card-header">
				<h3 class="box-title">Datos personales</h3>
			</div>
			<div class="card-body">
				@if ($errors->any())
				<div class="list-group">
					@foreach($errors->all() as $error)
					<li class="list-group-item list-group-item-danger">
						{{ $error }}
					</li>
					@endforeach
				</div>
				@endif
				<form method="POST" action="{{ route('admin.users.update', $user) }}">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<div class="form-group">
						<label for="name">Nombre:</label>
						<input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control">
					</div>					
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" name="email" value="{{ old('email', $user->email) }}" class="form-control">
					</div>
					<button class="btn btn-primary btn-block">Actualizar usuario</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection