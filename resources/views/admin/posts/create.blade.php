@extends('admin.layout')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">
            	POSTS
            	<small>Crear publicación</small>
            </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        Inicio
                    </a>
                </li>
                <li class="breadcrumb-item">
                	<a href="{{ route('admin.posts.index') }}">
                		<i class="fas fa-list"></i>
                		Posts
                	</a>
                </li>
                <li class="breadcrumb-item active">
                	Crear
                </li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('content')
	<form action="">
		<div class="row">
			<div class="col-md-8">
				<div class="card card-secondary">
					<div class="card-body">
						<div class="form-group">
							<label for="">Título de la publicación</label>
							<input type="text" name="title" class="form-control" placeholder="Ingrese aquí el título de la publicación">
						</div>
						<div class="form-group">
							<label for="">Contenido publicación</label>
							<textarea name="body" class="form-control" rows="10" placeholder="Ingrese contenido de la publicación"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-secondary">
						<div class="card-body">
	    					<div class="form-group">
								<label for="">Extracto publicación</label>
								<textarea name="excerpt" class="form-control" placeholder="Ingrese un extracto de la publicación"></textarea>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>				
@endsection