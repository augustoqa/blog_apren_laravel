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
                            <input type="text" name="title" class="form-control"
                                   placeholder="Ingrese aquí el título de la publicación">
                        </div>
                        <div class="form-group">
                            <label for="">Contenido publicación</label>
                            <textarea name="body" id="editor" class="form-control" rows="10"
                                      placeholder="Ingrese contenido de la publicación"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-secondary">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Fecha de pulicación:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" name="published_at" class="form-control datetimepicker-input"
                                           data-target="#reservationdate"/>
                                    <div class="input-group-append" data-target="#reservationdate"
                                         data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoría</label>
                                <select name="categoria" id="categoria" class="form-control">
                                    <option value="">Seleciona una categoría</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Etiquetas</label>
                                <select
                                    class="select2"
                                    multiple="multiple"
                                    data-placeholder="Selecciona una o más etiquetas"
                                    style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Extracto publicación</label>
                                <textarea name="excerpt" class="form-control"
                                          placeholder="Ingrese un extracto de la publicación"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Guardar Publicación</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('styles')
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- summernote -->
    <link rel="stylesheet" href="/adminlte/plugins/summernote/summernote-bs4.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endpush

@push('scripts')
    <!-- InputMask -->
    <script src="/adminlte/plugins/moment/moment.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Summernote -->
    <script src="/adminlte/plugins/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 -->
    <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>

    <script>
        $('#reservationdate').datetimepicker({
            format: 'L'
        });


        $(function () {
            // Summernote
            $('#editor').summernote({
                height: 250
            })
        })

        //Initialize Select2 Elements
        $('.select2').select2()
    </script>
@endpush

