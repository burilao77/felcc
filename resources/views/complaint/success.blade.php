
            @extends('master')

  @section('content')

  <!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>

<br><br>
<div class="container">
<div class="about-head">
    <h2>Lista de Denuncias Resueltas</h2>
</div>

 <div class="row">
                    <table class="table table-striped">
                    <tr>
                        <th>Codigo</th>

                        <th>Creado</th>
                        <th>Modificado</th>

                    </tr>

                    @foreach($complaints as $complaint)
                        <tr data-id="<?= $complaint->id ?>">
                            <td>{{ $complaint->id }}</td>

                            <td>{{ $complaint->created_at }}</td>
                            <td>{{ $complaint->updated_at }}</td>


                        </tr>
                    @endforeach
                    </table>
        </div>


@stop
