@extends('admin.layout')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Todas las publicaciones</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        Inicio
                    </a>
                </li>
                <li class="breadcrumb-item active"> 
                    <i class="fas fa-list"></i>
                    Posts
                </li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('content')
<h1>Dashboard</h1>

<!-- /.card-header -->
<div class="card-body">
    <table id="posts-table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Extracto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->excerpt }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil-alt"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection
