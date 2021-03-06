@extends('adminlte::page')

@section('title', 'Criterios de inversión ')

@section('content_header')
<section class="content-header">
    <h1>
        Criterios de inversión
        <small>Lista</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Criterios de inversión</li>
    </ol>
</section>
@stop

@section('content')
<div class="content">
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Criterios de inversión</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {{-- <div>
                    <a href="/admin/about/create" class="btn btn-app pull-right">
                        <i class="fa fa-plus"></i> Nuevo
                    </a>
                </div>--}}
                <div class="col-md-12">
                    @include('flash::message')
                </div>
                <table id="dataTable" class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Lenguaje</th>
                            <th></th>
                        </tr>
                    </thead>

                    @foreach ($es_sections as $es_section)

                    <tbody>
                        <tr>
                            <td>{{ $es_section['id']  }}</td>
                            <td>{!! $es_section['title'] !!}</td>
                            <td> {{ Str::limit(strip_tags($es_section['description'] ) , 40) }}</td>
                            <td>
                                @if ($es_section['lang'] == 'es')
                                    <span class="badge bg-blue">{{ $es_section['lang'] }}</span>
                                @endif
                                @if($es_section['lang'] == 'en')
                                    <span class="badge bg-green">{{ $es_section['lang'] }}</span>
                                @endif
                                @if($es_section['lang'] == 'fr')
                                    <span class="badge bg-purple">{{ $es_section['lang'] }}</span>
                                @endif

                            </td>

                            <td>
                                {{ Form::open(['route' => ['about.destroy', $es_section['id'] ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                <a href="/#investment-criteria" target="_blank" class="btn btn-success btn-sm"><i class="far fa-eye"></i> </a>
                                <a href="/admin/criteria-list/{{ $es_section['lang'] }}"  class="btn btn-info btn-sm"> <i class="fas fa-list"></i> </a>

                                <a href="{{route('criteria.edit', $es_section['lang'])}}" class="btn btn-primary btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>


                                {{ Form::close() }}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach

                </table>
                <div class="col-md-12 text-center">

                </div>
            </div>

        </div>

    </div>
</div>
@stop

@section('js')
<script src="{{ asset('vendor/adminlte/plugins/datatable/js/responsive.js') }}"></script>
<script>
    $(function() {

        $('#dataTable').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false,
            "scrollX": true,
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
        })
    })
</script>
@stop
