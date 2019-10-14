@extends('adminlte::page')

    @section('title', 'Contacto')

@section('content_header')
    <link rel="stylesheet" href="{{ asset('vendor_assets/summernote/summernote.css') }}">
<section class="content-header">

    <h1>
        Nosotros
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/admin/about"><i class="fa fa-dashboard"></i> Nosotros</a></li>
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
                {{ Form::open(['route' => ['contact.update', $section_id], 'method' => 'PUT', 'files' => true]) }}

                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Título</label>
                                <textarea name="titulo" id="titulo" >{!!  $es_sections[0]->description !!}</textarea>
                                @if($errors)
                                <span class="text-danger"> {{$errors->first('titulo')}}</span>
                                @endif
                            </div>
                        </div>

                        <br>
                        <div class="col-md-11 box-header with-border">
                            <h3 class="box-title">Imágen</h3>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen Escritorio (581 pixeles ancho * 702 pixeles alto) </label>
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
                                <img src="{{ asset('img/contact').'/'.'thumb_'.$image->image }}" alt="">
                                <div class="pull-right">
                                    <p>
                                        <br>
                                        <a href="/admin/contact/image/destroy/{{ $image->id }}/{{ $set_lang }}" class="btn btn-danger ">Borrar</a>
                                    </p>
                                </div>
                            @endif
                        </div>

                        <br>
                        <div class="col-md-11 box-header with-border">
                            <h3 class="box-title">Nombres de campos de formulario</h3>
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre formulario</label>
                                <input type="text" name="nombre_formulario" class="form-control" value="{{ $es_sections[1]->description }}">

                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('nombre_formulario')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email formulario</label>
                                <input type="text" name="email_formulario" class="form-control" value="{{ $es_sections[2]->description }}">
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('email_formulario')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Teléfono formulario</label>
                                <input type="text" name="telefono_formulario" class="form-control" value="{{ $es_sections[3]->description }}">
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('telefono_formulario')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12"> </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mensaje formulario</label>
                                <input type="text" name="mensaje_formulario" class="form-control" value="{{ $es_sections[4]->description }}">
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('mensaje_formulario')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12"> </div>
                        <div class="col-md-11 box-header with-border">
                            <h3 class="box-title">Etiquetas inferiores</h3>
                        </div>
                        <div class="col-md-12"><br> </div>
                        {{-- etiquetas inferiores--}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Dirección</label>
                                <input type="text" name="direccion" class="form-control" value="{{ $es_sections[5]->description }}">
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('direccion')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contenido dirección</label>
                                <input type="text" name="contenido_direccion" class="form-control" value="{{ $es_sections[6]->description }}">
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('contenido_direccion')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12"><br> </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Número de teléfono</label>
                                <input type="text" name="telefono" class="form-control" value="{{ $es_sections[7]->description }}">
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('telefono')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contenido teléfono</label>
                                <input type="text" name="contenido_telefono" class="form-control" value="{{ $es_sections[8]->description }}">
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('contenido_telefono')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12"><br> </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $es_sections[9]->description }}">
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('email')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">email</label>
                                <input type="text" name="contenido_email" class="form-control" value="{{ $es_sections[10]->description }}">
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('contenido_email')}}</span>
                                @endif
                            </div>
                        </div>
                        {{-- etiquetas inferiores--}}



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
            $('#titulo').summernote(
                {
                    height: 50,
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'ObjectSans-Regular', 'ObjectSans-Bold' ],
                    fontNamesIgnoreCheck: ["ObjectSans-Regular", "ObjectSans-Bold"],
                    colors: [
                        ['#1b365d', '#57728b', 'black', 'white']
                    ]
                }
            );




        });

</script>

@stop
