<div class="modal fade" id="eliminar<?=$num?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ELIMINAR TASA DE INTERES</h5>
        </div>
        <div class="modal-body text-center">
          <form action="{{ route('intereses.destroy', $interes->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <h4>Estas seguro que deseas eliminar esta tasa del: <span class="text-danger">{{ $interes->tasa }}%</span></h4>
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
            <button type="submit" class="btn btn-primary">ACEPTAR</button>
         </form>
        </div>
      </div>
    </div>
  </div>