<div class="table-responsive" style="overflow: auto">
    <table class="table tablesorter">
        <thead class="text-primary" class="blockquote blockquote-primary">
            <tr >
                <th class="text-info" scope="col">Opciones</th>
                <th class="text-info" scope="col">Fecha y Hora</th>
                <th class="text-info" scope="col">Descripción</th>
                <th class="text-info" scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notassalidas as $notasalida)
                <tr>
                    <td class="text-left">
                        @if ($notasalida->condicion == 1)
                            <button type="button" title="Devolver o Eliminar Producto" class="btn btn-danger btn-sm" onclick="desactivar({{$notasalida->id}})">
                                <i class="tim-icons icon-trash-simple"></i>
                            </button>
                        @endif
                        <a type="button" title="Ver detalles de la nota de salida" class="btn btn-success btn-sm" href="{{url('notasalida/ver/'.$notasalida->id)}}">
                            <i class="tim-icons icon-tap-02"></i>
                        </a>
                    </td>
                    <td>{{$notasalida->created_at}}</td>
                    <td>{{$notasalida->descripcion}}</td>
                    <td>
                        @if ($notasalida->condicion == 1)
                            <span class="badge badge-info">Registrado</span>
                        @else
                            <span class="badge badge-danger">Devuelto</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{$notassalidas->links()}}
    </div>
</div>