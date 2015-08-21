@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Crear Usuario
                    </div>
                    <div class="panel-body">
                        {!! Form::model($user)  !!}
                        <div class="form-group">
                            <div class="col-md-8">
                                {!! Form::label('name') !!}
                                {!! Form::text('name',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                {!! Form::label('username') !!}
                                {!! Form::text('username',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                {!! Form::label('email') !!}
                                {!! Form::email('email',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                {!! Form::label('password', 'Password') !!}
                                {!! Form::password('password',['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                {!! Form::label('role', 'Tipo de usuario') !!}
                                {!! Form::select('role', config('roles.role') , null, [
                                'class' => 'form-control',
                                'required',
                                ]) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="text-center">
                                    <br/>
                                    {!! Form::submit('Guardar información', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection