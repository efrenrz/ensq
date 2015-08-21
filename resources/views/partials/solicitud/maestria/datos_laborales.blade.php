<div class="row">
    <h2>Datos Laborales</h2>
    <hr/>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('school_of_origin', 'Lugar actual donde labora') !!}
            {!! Form::text('school_of_origin', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la escuela']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('level_of_education', 'Puesto Actual') !!}
            {!! Form::text('level_of_education', null, ['class' => 'form-control', 'placeholder' => 'Lic. en Educacion Primaria']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('most_recent_studies', 'Dirección') !!}
            {!! Form::text('most_recent_studies', null, ['class' => 'form-control', 'placeholder' => 'Último Grado de estudios']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('overall_score', 'Colonia') !!}
            {!! Form::text('overall_score', null, ['class' => 'form-control', 'placeholder' => '8.0']) !!}
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('years_of_teaching_experience', 'C.P') !!}
            {!! Form::text('years_of_teaching_experience', null, ['class' => 'form-control', 'placeholder' => 'Años de Experiencia en la Docencia']) !!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('state', 'Ciudad') !!}
                {!! Form::select('state', $states,null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('city', 'Municipio') !!}
                {!! Form::select('city', $states,null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('delivery_grade_degree', 'Teléfono') !!}
            {!! Form::text('delivery_grade_degree', null, ['class' => 'form-control', 'placeholder' => 'Fecha de expedición de Título']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('delivery_grade_degree', 'Extensión') !!}
            {!! Form::text('delivery_grade_degree', null, ['class' => 'form-control', 'placeholder' => 'Fecha de expedición de Título']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('delivery_grade_degree', 'Fax') !!}
            {!! Form::text('delivery_grade_degree', null, ['class' => 'form-control', 'placeholder' => 'Fecha de expedición de Título']) !!}
        </div>
    </div>

</div>
