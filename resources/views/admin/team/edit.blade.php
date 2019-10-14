@extends('adminlte::page')

@section('title', 'Equipo')

@section('content_header')
    <link rel="stylesheet" href="{{ asset('vendor_assets/summernote/summernote.css') }}">
<section class="content-header">

    <h1>
        Equipo
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/admin/about"><i class="fa fa-dashboard"></i> Equipo</a></li>
        <li class="active">Editar</li>
    </ol>
</section>
@stop

@section('content')
<div class="content">
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Editar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {{ Form::open(['route' => ['team.update', $section_id], 'method' => 'PUT', 'files' => true]) }}

                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Título</label>
                                <textarea class="title" name="titulo" id="titulo" >{!!  $es_sections[0]->description !!}</textarea>


                                @if($errors)
                                <span class="text-danger"> {{$errors->first('titulo')}}</span>
                                @endif
                            </div>


                        </div>
                        <br>
                        <div class="col-md-11 box-header with-border">
                            <h3 class="box-title">Persona 1</h3>
                        </div>
                        <div class="col-md-4">
                            <br> <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen persona 1 (587 pixeles ancho * 579 pixeles alto) </label>
                                @if($image == '')
                                    <input type="file" name="imagen" class="form-control">
                                    @if($errors)
                                        <span class="text-danger"> {{$errors->first('imagen')}}</span>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12"> </div>
                        <div class="col-md-2">
                            @if($image != '')
                                <img src="{{ asset('img/team').'/'.'thumb_'.$image->image }}" alt="">
                                <div class="pull-right">
                                    <p>
                                        <br>
                                        <a href="/admin/team/image/destroy/{{ $image->id }}/{{ $set_lang }}" class="btn btn-danger ">Borrar</a>
                                    </p>
                                </div>
                            @endif
                        </div>

                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <textarea class="title" name="nombre" id="nombre" >{!!  $es_sections[1]->description !!}</textarea>

                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('nombre')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Puesto</label>
                                <textarea class="title" name="puesto" id="puesto" >{!!  $es_sections[2]->description !!}</textarea>

                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('puesto')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripcion</label>
                                <textarea class="description" name="descripcion" id="descripcion" >{!!  $es_sections[3]->description !!}</textarea>

                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('descripcion')}}</span>
                                @endif
                            </div>
                        </div>

                        <br>
                        <div class="col-md-11 box-header with-border">
                            <h3 class="box-title">Persona 2</h3>
                        </div>



                        <div class="col-md-12"> </div>

                        {{-- movil --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen persona 2 (587 pixeles ancho * 579 pixeles alto) </label>
                                @if($image2 == '')
                                    <input type="file" name="imagen2" class="form-control">
                                    @if($errors)
                                        <span class="text-danger"> {{$errors->first('imagen2')}}</span>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12"> </div>
                        <div class="col-md-2">
                            @if($image2 != '')
                                <img src="{{ asset('img/team').'/'.'thumb_'.$image2->image }}" alt="">
                                <div class="pull-right">
                                    <p>
                                        <br>
                                        <a href="/admin/team/image/destroy/{{ $image2->id }}/{{ $set_lang }}" class="btn btn-danger ">Borrar</a>
                                    </p>
                                </div>
                            @endif
                        </div>

                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <textarea class="title" name="nombre2" id="nombre2" >{!!  $es_sections[4]->description !!}</textarea>

                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('nombre2')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Puesto</label>
                                <textarea class="title" name="puesto2" id="puesto2" >{!!  $es_sections[5]->description !!}</textarea>

                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('puesto2')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripcion</label>
                                <textarea class="description" name="descripcion2" id="descripcion2" >{!!  $es_sections[6]->description !!}</textarea>

                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('descripcion2')}}</span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <button class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="lang" value="{{ $set_lang }}">
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script src="{{asset('vendor_assets/summernote/summernote.min.js')}}"></script>
<script>
    $(document).ready(function() {
            $('.title').summernote(
                {
                    height: 50,
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'ObjectSans-Regular', 'ObjectSans-Bold' ],
                    fontNamesIgnoreCheck: ["ObjectSans-Regular", "ObjectSans-Bold"],
                    colors: [
                        ['#1b365d', '#57728b', 'black', 'white']
                    ]
                }
            );

            $('.description').summernote(
                {
                    height: 200,
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'ObjectSans-Regular', 'ObjectSans-Bold' ],
                    fontNamesIgnoreCheck: ["ObjectSans-Regular", "ObjectSans-Bold"],
                    colors: [
                        ['#1b365d', '#57728b', 'white']
                    ],
                    toolbar: [
                        [ 'style', [ 'style' ] ],
                        [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                        [ 'fontname', [ 'fontname' ] ],
                        [ 'fontsize', [ 'fontsize' ] ],
                        [ 'color', [ 'color' ] ],
                        [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
                        [ 'insert', [ 'link'] ],
                        [ 'view', [ 'undo', 'redo',  'codeview' ] ]
                    ]
                }
            );
        });

</script>

@stop
