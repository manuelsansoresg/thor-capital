@extends('adminlte::page')

@section('title', 'Transacciones ')

@section('content_header')
<link rel="stylesheet" href="{{ asset('vendor_assets/summernote/summernote.css') }}">
<section class="content-header">

    <h1>
        Lista
        <small>Transacciones</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/admin/transaction"><i class="fa fa-dashboard"></i> Transacciones </a></li>
        <li><a href="/admin/transaction-list/{{ $set_lang }}"><i class="fa fa-dashboard"></i> Lista </a></li>
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
                {{ Form::open(['route' => ['transaction-list.update', $list->id], 'method' => 'PUT', 'files' => true]) }}

                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Título</label>
                                <textarea name="titulo" class="title" cols="30" rows="10">{!! $list->name !!}</textarea>

                                @if($errors)
                                <span class="text-danger"> {{$errors->first('titulo')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12"> </div>
                        <div class="col-md-4">
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen (645 pixeles ancho * 1080 pixeles alto) </label>
                                @if($list->image == '')
                                    <input type="file" name="imagen" class="form-control">
                                    @if($errors)
                                    <span class="text-danger"> {{$errors->first('imagen')}}</span>
                                    @endif
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12"> </div>
                        <div class="col-md-2">
                            @if($list->image != '')
                            <img src="{{ asset('img/transaction').'/'.'thumb_'.$list->image }}" alt="">
                            <div class="pull-right">
                                <p>
                                    <br>
                                    <a href="/admin/transaction-list/image/destroy/{{ $list->id }}/{{ $set_lang }}" class="btn btn-danger ">Borrar</a>
                                </p>
                            </div>
                            @endif
                        </div>


                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripción</label>
                                <textarea name="descripcion" id="descripcion">{!! $list->description !!}</textarea>

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

        $('.title').summernote({
            height: 50,
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'ObjectSans-Regular', 'ObjectSans-Bold', 'ObjectSans-Thin'],
            fontNamesIgnoreCheck: ["ObjectSans-Regular", "ObjectSans-Bold", "ObjectSans-Thin"],
            colors: [
                ['#1b365d', '#57728b', 'white']
            ],
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ol', 'ul', 'paragraph', 'height']],
                ['insert', ['link']],
                ['view', ['undo', 'redo', 'codeview']]
            ]
        });


        $('#descripcion').summernote({
            height: 200,
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'ObjectSans-Regular', 'ObjectSans-Bold', 'ObjectSans-Thin'],
            fontNamesIgnoreCheck: ["ObjectSans-Regular", "ObjectSans-Bold", "ObjectSans-Thin"],
            colors: [
                ['#1b365d', '#57728b', 'white']
            ],
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ol', 'ul', 'paragraph', 'height']],
                ['insert', ['link']],
                ['view', ['undo', 'redo', 'codeview']]
            ]
        });


    });
</script>

@stop