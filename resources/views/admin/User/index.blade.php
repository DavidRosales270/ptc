@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Usuarios
                <small>Lista de todos los Usuarios</small>
            </h1>
        </div>
    </div>
    @include('partials/messages')

    <div class="row tab-search">
        <div class="col-md-8">
            <a href="{{ route('admin.user.add') }}" class="btn btn-success" id="add-user">
                <i class="glyphicon glyphicon-plus"></i>
                Agregar Usuario
            </a>
        </div>
    </div>

    <div class="table-responsive top-border-table">
        @if(count($users))
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Fecha de Registro</th>
                <th>Accion</th>
                </thead>
                <tbody>

                <?php foreach($users as $user): ?>
                <tr>
                    <td><?php print $user->id ?></td>
                    <td><?php print $user->name ?></td>
                    <td><?php print $user->email ?></td>
                    <td><?php print $user->created_at ?></td>
                    <td class="text-center">

                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary btn-circle edit" title="" data-toggle="tooltip" data-placement="top" data-original-title="Editar Usuario">
                            <i class="glyphicon glyphicon-edit"></i>
                        </a>

                        <a href="{{ route('admin.user.delete', $user->id) }}" class="btn btn-danger btn-circle" title="Eliminar Usuario"
                           data-toggle="tooltip"
                           data-placement="top"
                           data-method="DELETE"
                           data-confirm-title="Por favor confirme"
                           data-confirm-text="Estas seguro de eliminar este usuario?"
                           data-confirm-delete="Si eliminar">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        @else
            <p>No hay Usuarios</p>
        @endif


    </div>
@stop