<div class="modal fade" id="registrar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">REGISTRAR NUEVO TASA DE INTERES</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('intereses.store') }}" method="POST">
            @csrf
            <input class="form-control" {{ old('nombre') }} type="number" name="nombre" placeholder="Tasa...">
            <hr>
            <button type="submit" class="btn btn-primary">REGISTRAR</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
          </form>
        </div>
      </div>
    </div>
  </div>