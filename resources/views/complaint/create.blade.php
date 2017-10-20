  @extends('master')
  @section('content')

  <!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>


<br><br>
<div class="container">
<div class="about-head">
    <h2>Crear Denuncia</h2>
</div>
    {!! Form::open(['route' => 'complaint.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
  <ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active">
      <a href="#denuncia" aria-controls="denuncia" role="tab" data-toggle="tab">Datos Denuncia</a>
    </li>
    <li role="presentation">
      <a href="#denouncer" aria-controls="denouncer" role="tab" data-toggle="tab">Formulario Denunciante</a>
    </li>
    <li role="presentation">
      <a href="#denounced" aria-controls="denounced" role="tab" data-toggle="tab">Formulario Denunciado</a>
    </li>
  </ul>

  <div class="tab-content">
   <!-- Tab datos denuncia -->
    <div role="tabpanel" class="tab-pane active" id="denuncia">
        <div class="col-xs-9">
            <div class="panel-body">
                 <div class="form-group">
                    {!! Form::label('categories', 'Categoría') !!}
                    {!! Form::select('categories', ['abuse' => 'Abuso', 'homicide' => 'Homicidio', 'Stole' => 'Robo'], 'abuse', ['class' => 'form-control', 'required'])!!}
                 </div>
                <div class="form-group">
                    {!! Form::label('description', 'Descripción') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control','size' => '30x5', 'required', 'placeholder' => 'Ingresa una Descripción']) !!}
                </div>
           
                <div class="form-group">
                    {!! Form::label('active', 'Estado') !!}
                    {!! Form::checkbox('active', 'on', false, ['class' => 'form-control'])!!}
                </div>
            </div>
        </div>
    </div>
<!-- tab form denunciante -->
    <div role="tabpanel" class="tab-pane" id="denouncer">
        <div class="col-xs-9">
            <div class="panel-body">
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
            </div>
        </div>

   
 
    
      </div>
<!-- form del denunciado -->
    <div role="tabpanel" class="tab-pane" id="denounced">
        <div class="col-xs-9">
            <div class="panel-body">
             <div class="form-group">
                {!! Form::label('nameDenounced', 'Nombre') !!}
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
            </div>
        </div>
        <div class="col-xs-9">
            <div class="panel-body">
            <div class="form-group">
                {!! Form::submit('Registrar Denuncia', ['class' => 'btn btn-info']) !!}

            </div>
            {!! Form::close() !!}
              </div>
        </div>
      </div>
 <!-- -->
  </div>
</div>
<!-- <div class="row">
    <div class="col-md-12">
        <div class="panel-body">

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
                {!! Form::select('categories', ['abuse' => 'Abuso', 'homicide' => 'Homicidio', 'stole' => 'Robo','violation'=>'violacion','missing people'=>'personas desaparecidas','Femicides'=> 'feminicidios' ], 'mistreatment', ['class' => 'form-control', 'required'])!!}
            </div>
             <hr>

             <h3>Formulario del Denunciante</h3>
             <br>
             <div class="form-group">
                {!! Form::label('nameDenouncer', 'Nombre') !!}
                {!! Form::text('nameDenouncer', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el nombre'])!!}
             </div>
             <div class="form-group">
                {!! Form::label('nameDenouncer', 'Apellido') !!}
                {!! Form::text('nameDenouncer', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el apellido'])!!}
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

             <h3>Formulario del Denunciado</h3>
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
                {!! Form::submit('Registrar Denuncia', ['class' => 'btn btn-info']) !!}

            </div>
        {!! Form::close() !!}
        </div>
    </div>

</div>
</div> -->

@stop
