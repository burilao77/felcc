      @extends('master')
  @section('content')

  <!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>
<br><br>
<div class="container">
<div class="about-head">
    <h2>Editar Denuncia</h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel-body">
        {!! Form::model($complaint,[ 'route' => ['complaint.update', $complaint->id], 'method' => 'PUT']) !!}
        <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                {!! Form::label('title', 'Título') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa un Titulo'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Descripción') !!}
                {!! Form::text('description', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa una Descripción']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('categories', 'Categoría') !!}
                {!! Form::select('categories', ['abuse' => 'Abuso', 'homicide' => 'Homicidio', 'stole' => 'Robo'], 'mistreatment', ['class' => 'form-control', 'required'])!!}
            </div>
             <hr>
             <h3>Datos del Denunciante</h3>
             <br>
             <div class="form-group">
                {!! Form::label('nameDenouncer', 'Nombre') !!}
                {!! Form::text('nameDenouncer', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el nombre'])!!}
             </div>
             <div class="form-group">
                {!! Form::label('ageDenouncer', 'Edad en Años') !!}
                {!! Form::number('ageDenouncer', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la edad'])!!}
             </div>
             <div class="form-group">
                {!! Form::label('dniDenouncer', 'DNI/CI') !!}
                {!! Form::text('dniDenouncer', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el número de documento'])!!}
             </div>
            <div class="form-group">
                {!! Form::label('genderDenouncer', 'Sexo') !!}
                {!! Form::select('genderDenouncer', ['male' => 'Masculino', 'female' => 'Femenino'], 'male', ['class' => 'form-control', 'required'])!!}
             </div>
            <div class="form-group">
                {!! Form::label('phoneDenouncer', 'Telefono/Movil') !!}
                {!! Form::number('phoneDenouncer', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa su número'])!!}
             </div>
            <div class="form-group">
                {!! Form::label('addressDenouncer', 'Dirección') !!}
                {!! Form::text('addressDenouncer', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la dirección'])!!}
            </div>
                          <hr>
             <h3>Datos del Denunciado</h3>
             <br>
             <div class="form-group">
                {!! Form::label('nameDenouncedr', 'Nombre') !!}
                {!! Form::text('nameDenounced', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el nombre'])!!}
             </div>
            <div class="form-group">
                {!! Form::label('genderDenounced', 'Sexo') !!}
                {!! Form::select('genderDenounced', ['male' => 'Masculino', 'female' => 'Femenino'], 'male', ['class' => 'form-control', 'required'])!!}
             </div>
            <div class="form-group">
                {!! Form::label('phoneDenounced', 'Telefono/Movil') !!}
                {!! Form::number('phoneDenounced', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa su número'])!!}
             </div>
            <div class="form-group">
                {!! Form::label('addressDenounced', 'Dirección') !!}
                {!! Form::text('addressDenounced', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la dirección'])!!}
            </div>

             <div class="form-group">
                {!! Form::submit('Editar Denuncia', ['class' => 'btn btn-info']) !!}

            </div>
        {!! Form::close() !!}
        </div>
    </div>

</div>
</div>

@stop
