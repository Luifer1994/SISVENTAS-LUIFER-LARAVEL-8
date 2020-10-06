<div class="modal fade" id="registrar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">REGISTRAR NUEVO DEPARTAMENTO</h5>
        </div>
        <div class="modal-body">
            <form action="{{ route('departamento.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                            <input class="form-control" {{ old('nombre') }} type="text" name="nombre" placeholder="Nombre..">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <select class="form-control" name="pais" id="pais">
                        <option value="">Seleccione...</option>
                        @foreach ($paises as $pais)
                            <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
                        @endforeach
                        </select>
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