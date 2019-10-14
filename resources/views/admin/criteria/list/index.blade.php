@extends('adminlte::page')

@section('title', 'Lista Criterios de inversión ')

@section('content_header')
    <section class="content-header">
        <h1>
            Lista
            <small>Criterios de inversión</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="/admin/transaction">Criterios de inversión</a> </li>
            <li class="active">Lista</li>
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
                     <div>
                         <a href="/admin/criteria-list/create/{{  $set_lang }}" class="btn btn-app pull-right">
                             <i class="fa fa-plus"></i> Nuevo
                         </a>
                     </div>
                    <div class="col-md-12">
                        @include('flash::message')
                    </div>
                    <table id="dataTable" class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Título</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>

                        @foreach ($lists as $list)

                            <tbody>
                            <tr>
                                <td>{{ $list['id']  }}</td>
                                <td>{!! $list['name'] !!}</td>
                                <td>
                                    @if ($list['lang'] == 'es')
                                        <span class="badge bg-blue">{{ $list['lang'] }}</span>
                                    @endif
                                    @if($list['lang'] == 'en')
                                        <span class="badge bg-green">{{ $list['lang'] }}</span>
                                    @endif
                                    @if($list['lang'] == 'fr')
                                        <span class="badge bg-purple">{{ $list['lang'] }}</span>
                                    @endif

                                </td>

                                <td>
                                    <a href="/#investment-criteria" target="_blank" class="btn btn-success btn-sm"><i class="far fa-eye"></i> </a>
                                    <a href="/admin/criteria-list/edit/{{ $list['id'] }}/{{ $list['lang'] }}"  class="btn btn-primary btn-sm">  <i class="far fa-edit"></i> </a>


                                    <button onclick="sendConfirm('/admin/criteria-list/destroy/{{ $list->id }}/{{ $list->lang }}')" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </button>

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
    <script src="{{ asset('/js/admin.js') }}"></script>
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
