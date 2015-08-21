<div class="row">
    <h2>Datos Profesionales</h2>
    <hr/>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('school_of_origin', 'Escuela de procedencia') !!}
            {!! Form::text('school_of_origin', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la escuela']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('level_of_education', 'Nivel de estudios terminados y especialidad') !!}
            {!! Form::text('level_of_education', null, ['class' => 'form-control', 'placeholder' => 'Lic. en Educacion Primaria']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('most_recent_studies', 'Último Grado de Académico') !!}
            {!! Form::text('most_recent_studies', null, ['class' => 'form-control', 'placeholder' => 'Último Grado de estudios']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('overall_score', 'Promedio general') !!}
            {!! Form::text('overall_score', null, ['class' => 'form-control', 'placeholder' => '8.0']) !!}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('years_of_teaching_experience', 'Años de Experiencia en la Docencia') !!}
            {!! Form::text('years_of_teaching_experience', null, ['class' => 'form-control', 'placeholder' => 'Años de Experiencia en la Docencia']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('professional_licence', 'Número de Cedula Profesional') !!}
            {!! Form::text('professional_licence', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo 3043442']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('delivery_grade_degree', 'Fecha de expedición de Título') !!}
            {!! Form::text('delivery_grade_degree', null, ['class' => 'form-control', 'placeholder' => 'Fecha de expedición de Título']) !!}
        </div>
    </div>

</div>