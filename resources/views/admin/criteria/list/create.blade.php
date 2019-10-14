@extends('adminlte::page')

@section('title', 'Criterios de inversión ')

@section('content_header')
    <link rel="stylesheet" href="{{ asset('vendor_assets/summernote/summernote.css') }}">
    <section class="content-header">

        <h1>
            Lista
            <small>Criterios de inversión</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="/admin/criteria"><i class="fa fa-dashboard"></i> Criterios de inversión </a></li>
            <li><a href="/admin/criteria-list/{{ $set_lang }}"><i class="fa fa-dashboard"></i> Lista </a></li>
            <li class="active">Nuevo</li>
        </ol>
    </section>
@stop

@section('content')
    <div class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Nuevo</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {{ Form::open(['route' => ['criteria-list.store'], 'method' => 'POST']) }}

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Título</label>
                                    <input class="form-control" name="titulo" type="text">


                                    @if($errors)
                                        <span class="text-danger"> {{$errors->first('titulo')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-11">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Descripción</label>
                                    <textarea name="descripcion" id="descripcion" ></textarea>

                                    @if($errors)
                                        <span class="text-danger"> {{$errors->first('descripcion')}}</span>
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


            $('#descripcion').summernote(
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
