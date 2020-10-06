<div class="modal fade" id="actualizar<?=$num?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ACTUALIZAR USUARIO: {{ $usuario->name }}</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('user.update',$usuario->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tipoDocumento">
                        Tipo de documento
                    </label>
                    <select name="tipoDocumento" id="tipoDocumento" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach ($tipoDocumento as $tipoD)
                            <option value="{{ $tipoD->id }}" {{ ($usuario->id_tipoDocumento == $tipoD->id) ? 'selected' : '' }}>{{ $tipoD->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="numeroDocumento">
                        Numero de documento
                    </label>
                    <input type="number" name="numeroDocumento" {{ old('numeroDocumento') }} value="{{ $usuario->documento }}" class="form-control" placeholder="Documento...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">
                        Nombre
                    </label>
                    <input type="text" name="name" {{ old('nombre') }} value="{{ $usuario->name }}" class="form-control" placeholder="Nombre...">
                </div>
                <div class="form-group col-md-6">
                    <label for="correo">
                        Correo
                    </label>
                    <input type="email" name="email" {{ old('email') }} value="{{ $usuario->email }}" class="form-control" placeholder="ejemplo@mail.com">
                </div>
            </div>

            

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="genero">
                        Genero
                    </label>
                    <select name="genero" id="genero" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach ($generos as $genero)
                            <option value="{{ $genero->id }}" {{ ($usuario->id_genero == $genero->id) ? 'selected' : '' }}>{{ $genero->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="rol">
                        Rol 
                    </label>
                    <select name="rol" id="rol" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach ($roles as $rol)
                            <option value="{{ $rol->id }}" {{ ($usuario->id_rol == $rol->id) ? 'selected' : '' }}>{{ $rol->nombreR }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ciudad">
                        Ciudad
                    </label>
                    <select name="ciudad" id="ciudad" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach ($ciudades as $ciudad)
                            <option value="{{ $ciudad->id }}" {{ ($usuario->id_ciudad == $ciudad->id) ? 'selected' : '' }}>{{ $ciudad->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="direccion">
                        Direcciones
                    </label>
                    <input type="text" name="direccion" {{ old('direccion') }} value="{{ $usuario->direccion }}" class="form-control" placeholder="Direccion...">
               </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
          </form>
        </div>
      </div>
    </div>
  </div>