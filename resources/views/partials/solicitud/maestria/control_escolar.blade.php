<div class="row">
    <h2>Control Escolar</h2>
    <hr/>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('school_of_origin', 'Semestre') !!}
            {!! Form::text('school_of_origin', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la escuela']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('level_of_education', 'Grupo') !!}
            {!! Form::text('level_of_education', null, ['class' => 'form-control', 'placeholder' => 'Lic. en Educacion Primaria']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('most_recent_studies', 'Horario') !!}
            {!! Form::text('most_recent_studies', null, ['class' => 'form-control', 'placeholder' => 'Último Grado de estudios']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('most_recent_studies', 'Generación') !!}
            {!! Form::text('most_recent_studies', null, ['class' => 'form-control', 'placeholder' => 'Último Grado de estudios']) !!}
        </div>
    </div>
</div>


<div class="row">
    <h2>Dcoumentación</h2>
    <hr/>
    <div class="col-md-8">

        <table class="table table-bordered">
            <tr>
                <th class="col-md-6">Documentación</th>
                <th class="col-md-1">Cotejado</th>
                <th class="col-md-1">Recibido</th>
            </tr>

            @foreach ($requirements as $requirement)
                <tr>
                    <td>{{ $requirement['description'] }}</td>
                    <td class="text-center">
                        <input type="checkbox" value="" class="big-checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox" value="" class="big-checkbox">
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

</div>