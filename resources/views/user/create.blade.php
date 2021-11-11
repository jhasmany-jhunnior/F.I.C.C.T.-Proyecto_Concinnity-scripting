@extends('principal')
@section('contenido')
    <div class="content">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row" style="padding-left: 15px; padding-right: 15px;">
                                <a href="{{url('users/')}}">
                                    <button type="button" class="btn btn-secondary btn-sm btn-outline-dark btn-pill">
                                        <i class="fas fa-arrow-left"></i>Atras
                                    </button>
                                </a>
                                &nbsp;&nbsp;&nbsp;
                                <div style="display:table; text-align: center;">
                                    <h4 class="text-primary" style="display:table-cell; vertical-align:middle;">Agregando Usuario</h4>
                                </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('user/create')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-4 col-sm-4">
                                    <label class="text-info">CI: </label>
                                    <input name="ci" class="form-control" maxlength="10" type="text" placeholder="CI..." required>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label class="text-info">Nombre: </label>
                                    <input name="nombre" class="form-control" maxlength="50" type="text" placeholder="Nombre..." required>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label class="text-info">Sexo: </label>
                                    <select class="form-control" name="sexo">
                                        <option class="text-dark" value="M">Masculino</option>
                                        <option class="text-dark" value="F">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-sm-4">
                                    <label class="text-info">Teléfono: </label>
                                    <input name="telefono" class="form-control" maxlength="10" type="text" placeholder="Teléfono..." required>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label class="text-info">Dirección: </label>
                                    <input name="direccion" class="form-control" maxlength="60" type="text" placeholder="Dirección...">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label class="text-info">Rol: </label>
                                    <select class="form-control" name="idrol">
                                        @foreach ($roles as $rol)
                                            <option class="text-dark" value="{{$rol->id}}">{{$rol->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-6">
                                    <label class="text-info">Email: </label>
                                    <input name="email" class="form-control" type="email" placeholder="Email..." required>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label class="text-info">Password: </label>
                                    <input name="password" class="form-control" type="password" placeholder="Password..." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12">
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                    <form runat="server">
                                    <input type='file' id="imgInp"  accept="image/jpg, image/jpeg"> 
                                    <div>
                                        <img id="blah" width="150" height="70" src="#" alt="Imagen" />
                                    </div>
                                    </form>
                            </div>
                            <div class="form-group row"  style="padding-left: 15px; padding-right: 15px;">
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        function readURL(input) {
    if (input.files && input.files[0]) { //Revisamos que el input tenga contenido
        var reader = new FileReader(); //Leemos el contenido
        
        reader.onload = function(e) { //Al cargar el contenido lo pasamos como atributo de la imagen de arriba
        $('#blah').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function() { //Cuando el input cambie (se cargue un nuevo archivo) se va a ejecutar de nuevo el cambio de imagen y se verá reflejado.
    readURL(this);
    });
    </script>
    @endpush
@endsection
