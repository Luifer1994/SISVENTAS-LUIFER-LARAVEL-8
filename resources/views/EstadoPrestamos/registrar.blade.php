<div class="modal fade" id="registrar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">REGISTRAR NUEVO ESTADO DE PRESTAMO</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('Eprestamo.store') }}" method="POST">
            @csrf
            <input class="form-control" {{ old('nombre') }} type="text" name="nombre" placeholder="Nombre..">
            <hr>
            <button type="submit" class="btn btn-primary">REGISTRAR</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
          </form>
        </div>
      </div>
    </div>
  </div>