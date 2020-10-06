<div class="modal fade" id="actualizar<?=$num?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ACTUALIZAR CIUDAD</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('ciudad.update',$ciudad->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                        <input class="form-control" value="{{ $ciudad->nombre }}" {{ old('nombre') }} type="text" name="nombre" placeholder="Nombre..">
                </div>
                
                <div class="form-group col-md-6">
                    <select class="form-control" name="departamento" id="pais">
                    <option value="">Seleccione...</option>
                    @foreach ($departamentos as $depar)
                        <option value="{{ $depar->id }}" {{ ($ciudad->id_departamento == $depar->id) ? 'selected' : '' }}>{{ $depar->nombre }}</option>
                    @endforeach
                    </select>
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