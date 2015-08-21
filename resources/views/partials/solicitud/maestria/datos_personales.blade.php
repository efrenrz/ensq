<div class="row" >

    {!! Form::Open([
        'url' => '',
        'method' => 'post',
        'name' => 'personal_information',
        'ng-submit' => 'submitForm(personal_information)'
    ]) !!}
    <h2>Datos Personales</h2>
    <hr/>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, [
                'required',
                'class' => 'form-control',
                'placeholder' => 'Por favor introduzca su Nombre (s)',
                'ng-model' => 'data.name'
            ]) !!}
            <span ng-show="personal_information.name.$dirty && personal_information.name.$error.required">Requerido</span>

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('last_name', 'Apellido Paterno') !!}
            {!! Form::text('last_name', null, [
                'class' => 'form-control',
                'placeholder' => 'Apellido Paterno',
                'ng-model' => 'data.last_name',
                'required'
            ]) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('second_last_name', 'Apellido Materno') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Apellido Materno']) !!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('curp', 'CURP') !!}
                {!! Form::text('curp', null, [
                    'class' => 'form-control',
                    'style' => 'text-transform:uppercase',
                    'placeholder' => 'Clave única de Registro de Población',
                    'ng-model' => 'data.curp',
                    'ng-pattern' => '/^[a-zA-Z]{4}\d{6}[a-zA-Z]{6}\d{2}$/',
                    'required',
                ]) !!}
            <span ng-show="personal_information.curp.$dirty && personal_information.curp.$error.pattern"> CURP no valida </span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('rfc', 'RFC') !!}
                {!! Form::text('rfc', null, ['class' => 'form-control', 'style' => 'text-transform:uppercase', 'placeholder' => 'Registro Federal de Contribuyentes']) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('gender', 'Genero') !!} <br/>
                <label class="radio-inline">
                    <input name="gender" id="radioM" value="M" type="radio" class="big-checkbox" > Mujer
                </label>
                <label class="radio-inline">
                    <input name="gender" id="radioH" value="H" type="radio" class="big-checkbox"> Hombre
                </label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('birthplace', 'Lugar de nacimiento') !!}
            {!! Form::select('birthplace', ["" => "Seleccione Estado"], null, [
                "class" => "form-control",
                "ng-model" => "selected_birthplace",
                "ng-options" => "state.nombre for state in states track by state.id",
                'required'
            ]) !!}

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('marital_status', 'Estado civil') !!}
            {!! Form::select('marital_status', config('options.marital_status') , null, [
            'class' => 'form-control',
            'required',
            ]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('address', 'Dirección') !!}
            {!! Form::text('address', null, [
                'class' => 'form-control',
                'placeholder' => 'Calle, nùmero interior e interior',
                'required',
            ]) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('neighborhood', 'Colonia') !!}
            {!! Form::text('neighborhood', null, [
                'class' => 'form-control', 'placeholder' => 'Colonia',
                'required'
            ]) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('zip_code', 'C.P') !!}
            {!! Form::text('zip_code', null, [
                'class' => 'form-control',
                'placeholder' => 'Código Postal',
                'required'
            ]) !!}
        </div>
    </div>

    <div class="col-md-12" >
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('state', 'Estado') !!}
                {!! Form::select('state',["" => "Seleccione Estado"],null, [
                    "class" => "form-control",
                    "ng-change" => "getMunicipios()",
                    "ng-model" => "selected_state",
                    "ng-options" => "state.nombre for state in states track by state.id",
                    'required'
                ]) !!}

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('city', 'Municipio') !!}
                {!! Form::select('city', ["" => "Seleccione Municipio"], null, [
                    "class" => "form-control",
                    "ng-model" => "select_city",
                    "ng-options" => "municipio.nombre for municipio in municipios track by municipio.id",
                    'required'
                ]) !!}

            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('telephone', 'Teléfono') !!}
            {!! Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => '(lada) teléfono']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('cellphone', 'C.P') !!}
            {!! Form::text('cellphone', null, ['class' => 'form-control', 'placeholder' => 'celular']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('email', 'Correo electrónico') !!}
            {!! Form::email('email', null, [
                'class' => 'form-control',
                'placeholder' => 'minombre@example.com',
                'ng-model' => 'data.email'
            ]) !!}
            <span ng-show="personal_information.email.$dirty && personal_information.email.$error.email">Ingrese E-mail valido</span>

        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <div class="text-right">
                {!! Form::submit('Siguiente', ['class' => 'btn btn-primary', 'ng-disabled' => 'personal_information.curp.$valid.pattern']) !!}
            </div>
        </div>
    </div>
        
    </form>

</div>
