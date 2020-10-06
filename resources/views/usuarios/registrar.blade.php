<div class="modal fade" id="registrar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">REGISTRAR NUEVO USUARIO</h5>
        </div>
        <div class="modal-body">

          <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tipoDocumento">
                        Tipo de documento
                    </label>
                    <select name="tipoDocumento" id="tipoDocumento" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach ($tipoDocumento as $tipoD)
                            <option value="{{ $tipoD->id }}" {{ old('tipoDocumento') ==  $tipoD->id  ? 'selected' : '' }}>{{ $tipoD->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="numeroDocumento">
                        Numero de documento
                    </label>
                    <input type="number" name="numeroDocumento" value="{{ old('numeroDocumento') }}" class="form-control" placeholder="Documento...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">
                        Nombre
                    </label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nombre...">
                </div>
                <div class="form-group col-md-6">
                    <label for="correo">
                        Correo
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="ejemplo@mail.com">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="contraseña">
                        Contraseña
                    </label>
                    <input type="password" name="password" class="form-control" autocomplete="new-password">
                </div>
                <div class="form-group col-md-6">
                    <label for="confirmarContraseña">
                        Confirmar Contraseña
                    </label>
                    <input type="password" name="password_confirmation" class="form-control" autocomplete="new-password">
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
                            <option value="{{ $genero->id }}" {{ old('tipoDocumento') ==  $genero->id  ? 'selected' : '' }}>{{ $genero->nombre }}</option>
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
                            <option value="{{ $rol->id }}" {{ old('tipoDocumento') ==  $rol->id  ? 'selected' : '' }}>{{ $rol->nombreR }}</option>
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
                            <option value="{{ $ciudad->id }}" {{ old('tipoDocumento') ==  $ciudad->id  ? 'selected' : '' }}>{{ $ciudad->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="direccion">
                        Direcciones
                    </label>
                    <input type="text" name="direccion" class="form-control" placeholder="Direccion...">
               </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">REGISTRAR</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
          </form>
        </div>
      </div>
    </div>
  </div>