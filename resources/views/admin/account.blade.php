@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">My Account</div>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                <p>Corrige los siguientes errores</p>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class="panel-body">
                        {!! Form::open(['url' => route('update_account'), 'method' => 'put', 'name' => 'account'])  !!}
                        <div class="form-group">
                            <div class="col-md-8">
                                {!! Form::label('name') !!}
                                {!! Form::text('name',$user->name,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                {!! Form::label('username') !!}
                                {!! Form::text('username',$user->username,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                {!! Form::label('email') !!}
                                {!! Form::email('email',$user->email,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                {!! Form::label('password', 'Password') !!}
                                {!! Form::password('password',['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-8">
                            <h3>Cambiar password</h3>

                            <div class="form-group">
                                <div class="col-md-8">
                                    {!! Form::label('new_password', 'Nuevo Password') !!}
                                    {!! Form::password('new_password',['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    {!! Form::label('new_password_confirmation', 'Confimación Password') !!}
                                    {!! Form::password('new_password_confirmation',['class' => 'form-control']) !!}
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="text-center">
                                    <br/>
                                    {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection