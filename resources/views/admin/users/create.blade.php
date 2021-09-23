@extends('admin.layout')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">Datos personales</h3>
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
					<form method="POST" action="{{ route('admin.users.store') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="name">Nombre:</label>
							<input type="text" name="name" value="{{ old('name') }}" class="form-control">
						</div>					
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="text" name="email" value="{{ old('email') }}" class="form-control">
						</div>

						<div class="d-flex">
							<div class="px-5">
								<label>Roles</label>
								@include('admin.roles.checkboxes')
							</div>

							<div>
								<label>Permisos</label>
								@include('admin.permissions.checkboxes')
							</div>
						</div>

						<span class="text-muted">La contraseña será generada y enviada al nuevo usuario vía email</span>

						<button class="btn btn-primary btn-block">Crear usuario</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection