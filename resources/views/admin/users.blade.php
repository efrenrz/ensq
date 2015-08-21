@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Panel de configuración de Usuarios
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="input-group">
                                {!! Form::model(Request::all(), ['method' => 'GET', 'url' => route('admin_users')]) !!}
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="text" name="name" value="" class="form-control"/>
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-search"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        {!! Form::submit('Buscar',['class' => 'btn btn-primary']) !!}
                                    </div>
                                {!! Form::close() !!}
                                </div>
                            </div>
                            <div class="pull-right">
                                <div class="col-md-2">
                                    <a href="users/create" class="btn btn-primary">Crear usuario</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>
                                    Nombre
                                </th>
                                <th>
                                    Username
                                </th>
                                <th>
                                    Correo electrónico
                                </th>
                                <th>
                                    Editar
                                </th>
                                <th>
                                    Activo
                                </th>
                                <th>
                                    Eliminar
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    {{ $user->name  }}
                                </td>
                                <td>
                                    {{ $user->username  }}
                                </td>
                                <td>
                                    {{ $user->email  }}
                                </td>
                                <td>
                                    <a href="users/edit/{{ $user->id  }}">editar</a>
                                </td>
                                <td>
                                    {!! Form::checkbox('active_' . $user->id, '',$user->active) !!}
                                </td>
                                <td>
                                    <a href="users/delete/{{ $user->id  }}">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">

                        {!! $users->appends(Request::only(['name']))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection