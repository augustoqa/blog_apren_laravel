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
    <form method="post" action="{{ route('admin.posts.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card card-secondary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Título de la publicación</label>
                            <input 
                                type="text" 
                                name="title" 
                                value="{{ old('title') }}" 
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="Ingrese aquí el título de la publicación">

                            @error('title')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="editor">Contenido publicación</label>
                            <textarea 
                                name="body" 
                                id="editor" 
                                class="form-control @error('title') is-invalid @enderror" 
                                rows="10"
                                placeholder="Ingrese contenido de la publicación"
                            >{{ old('body') }}</textarea>
                            @error('body')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
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
                                    <input 
                                        type="text" 
                                        name="published_at" 
                                        value="{{ old('published_at') }}" 
                                        class="form-control datetimepicker-input"
                                        data-target="#reservationdate"/>
                                    <div class="input-group-append" data-target="#reservationdate"
                                         data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category">Categoría</label>
                                <select 
                                    name="category" 
                                    id="category" 
                                    class="form-control @error('category') is-invalid @enderror"
                                >
                                    <option value="">Seleciona una categoría</option>
                                    @foreach($categories as $category)
                                        <option 
                                            value="{{ $category->id }}"
                                            {{ old('category') == $category->id ? 'selected' : '' }}
                                        >
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label id="tags">Selecciona las etiquetas</label>
                                <select
                                    name="tags[]"
                                    class="select2 @error('tags') is-invalid @enderror"
                                    id="tags"
                                    multiple
                                    data-placeholder="Selecciona una o más etiquetas"
                                    style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option 
                                            value="{{ $tag->id }}"
                                            {{ collect(old('tags'))->contains($tag->id) ? 'selected' : '' }}
                                        >
                                            {{ $tag->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tags')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="excerpt">Extracto publicación</label>
                                <textarea 
                                    name="excerpt" 
                                    id="excerpt" 
                                    class="form-control @error('excerpt') is-invalid @enderror"
                                    placeholder="Ingrese un extracto de la publicación"
                                >{{ old('excerpt') }}</textarea>
                                @error('excerpt')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
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
