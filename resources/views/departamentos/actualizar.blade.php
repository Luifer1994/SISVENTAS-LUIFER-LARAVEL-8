<div class="modal fade" id="actualizar<?=$num?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ACTUALIZAR DEPARTAMENTO</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('departamento.update',$depar->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                        <input class="form-control" value="{{ $depar->nombre }}" {{ old('nombre') }} type="text" name="nombre" placeholder="Nombre..">
                </div>
                
                <div class="form-group col-md-6">
                    <select class="form-control" name="pais" id="pais">
                    <option value="">Seleccione...</option>
                    @foreach ($paises as $pais)
                        <option value="{{ $pais->id }}" {{ ($depar->id_pais == $pais->id) ? 'selected' : '' }}>{{ $pais->nombre }}</option>
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