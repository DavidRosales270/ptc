@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Anuncios
                <small>Lista de todos los Anuncios</small>


            </h1>
        </div>
    </div>
    @include('partials/messages')

    <div class="row tab-search">
        <div class="col-md-8">
            <a href="{{ route('admin.announce.add') }}" class="btn btn-success" id="add-user">
                <i class="glyphicon glyphicon-plus"></i>
                Agregar Anuncio
            </a>
        </div>
    </div>

    <div class="table-responsive top-border-table">
        @if(count($announces))
        <table class="table">
            <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Tipo de Anuncio</th>
            <th>URL</th>
            <th>Fecha</th>
            <th>Action</th>
            </thead>
            <tbody>

            <?php foreach($announces as $announce): ?>
            <tr>
                <td><?php print $announce->id ?></td>
                <td><?php print $announce->title ?></td>
                <td><?php print $announce->nombre ?></td>
                <td><?php print $announce->url ?></td>
                <td><?php print $announce->date_show ?></td>
                <td class="text-center">

                    <a href="{{ route('admin.announce.edit', $announce->id) }}" class="btn btn-primary btn-circle edit" title="" data-toggle="tooltip" data-placement="top" data-original-title="Editar Anuncio">
                        <i class="glyphicon glyphicon-edit"></i>
                    </a>

                    <a href="{{ route('admin.announce.delete', $announce->id) }}" class="btn btn-danger btn-circle" title="Eliminar Anuncio"
                       data-toggle="tooltip"
                       data-placement="top"
                       data-method="DELETE"
                       data-confirm-title="Por favor confirme"
                       data-confirm-text="Estas seguro de eliminar esta anuncio?"
                       data-confirm-delete="Si eliminar">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
        @else
            <p>No hay Anuncios</p>
        @endif


    </div>
@stop