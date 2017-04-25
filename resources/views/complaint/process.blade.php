
            @extends('master')

  @section('content')

  <!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>

<br><br>
<div class="container">
<div class="about-head">
    <h2>Lista de Denuncias en Proceso</h2>
</div>

 <div class="row">
                    <table class="table table-striped">
                    <tr>
                        <th>Codigo</th>

                        <th>Creado</th>
                        <th>Modificado</th>
                        <th>Estado</th>
                    </tr>

                    @foreach($complaints as $complaint)
                        <tr data-id="<?= $complaint->id ?>">
                            <td>{{ $complaint->id }}</td>
  
                            <td>{{ $complaint->created_at }}</td>
                            <td>{{ $complaint->updated_at }}</td>
                            <td>            
                                    <?php if ($complaint->active): ?>
                                        <input type="checkbox" name="active" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="active">
                                    <?php endif ?>
                            </td>

                        </tr>
                    @endforeach
                    </table>
        </div>
<script>
   
    $("[name='active']").bootstrapSwitch({
        'onText': 'Si',
        'offText': 'No',
        'onColor': 'success',
        'offColor': 'danger'
    });
    $('input[name="active"]').on('switchChange.bootstrapSwitch', function(event, state) {
        var row = $(this).parents('tr');
        var id = row.data('id');
        var data = {
            'id': id,
            'active': state == true ? 1 : 0
        };
        var url = 'http://localhost/felcc/public/complaint/updateStatus';

        $.post(url, data, function(result) {
            var obj = $.parseJSON(result);
        }).fail(function () {
            alert('Ocurrio un error :-(');
        });
    });

</script>

@stop
