<div class="modal fade" id="actualizar<?=$num?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ACTUALIZAR ROL</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('rol.update',$rol->id) }}" method="POST">
            @method('PUT')
            @csrf
            <input class="form-control" {{ old('nombre') }} value="{{ $rol->nombreR }}" type="text" name="nombre">
            <hr>
            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
          </form>
        </div>
      </div>
    </div>
  </div>