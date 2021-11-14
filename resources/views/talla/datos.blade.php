<div class="table-responsive" style="overflow: auto">
    <table class="table tablesorter">
        <thead class="text-primary">
            <tr>
                <th class="text-info" scope="col">Opciones</th>
                <th class="text-info" scope="col">Nombre</th>
                <th class="text-info" scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tallas as $talla)
                <tr>
                    <td class="text-left">
                        <a type="button" title="Editar información del Cliente" class="btn btn-primary btn-sm" href="{{url('talla/edit/'.$talla->id)}}">
                            <i class="tim-icons icon-pencil"></i>
                        </a>
                    </td>
                    <td>{{$talla->nombre}}</td>
                    <td>
                        <span class="badge badge-success">Activo</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{$tallas->links()}}
    </div>
</div>