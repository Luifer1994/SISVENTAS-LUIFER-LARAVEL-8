@extends('layouts.plantilla')
@section('contenido')
<div class="card">
    {{-- MENSAJE QUE RETORNA EL CONTROLADOR AL ELIMINAR UN FUNCIONARIO --}}
    @if (session('mensaje'))
    <div class="alert alert-danger text-white bg-success-gradient text-center" id="alert" role="alert">
        <h4>{{ session ('mensaje')}}</h4>
    </div>
   @endif

   {{-- ERROR DE VALIDACION DE CAMPOS Y MUESTRA UNA ALERTA DE QUE HAY CAMPOS VAVIOS --}}
   @if ($errors->any())
   <div class="alert alert-success bg-danger text-white text-sm-center" id="alert" role="alert">
      <h4>ERROR AL REGISTAR, HAY CAMPOS VACIOS REVISA EL FORMULARIO</h4>
     </div>
     @endif
   <div class="card-header">
       <div class="row">
           <div class="col-8">
               <h6 class="card-title">CIUDADES</h6>
           </div>
           <div class="col-4">
               <button class="btn btn-primary fa-pull-right" data-toggle="modal" data-target="#registrar">
                   <span class="btn-label">
                       <i class="fa fa-plus"></i>
                   </span>
                   Ciudad
               </button>
               @include('ciudades.registrar')
           </div>
       </div> 
   </div>
   <div class="card-body table-responsive">
       <table class="table table-striped">
           <thead>
             <tr>
               <th scope="col">ID</th>
               <th scope="col">NOMBRE</th>
               <th scope="col">DEPARTAMENTO</th>
               <th scope="col">ACCIONES</th>
             </tr>
           </thead>
           <tbody>
               <?php $num=0; ?>
               @foreach ($ciudades as $ciudad)
               <?php $num++; ?>
                   <tr>
                       <td width="10px">{{ $ciudad->id }}</td>
                           <td>{{ $ciudad->nombre }}</td>
                           <td>{{ $ciudad->nombreD }}</td>
                           <td width="130px">
                               <button type="button" class="btn btn-icon btn-round btn-primary" data-toggle="modal" data-target="#actualizar<?=$num?>">
                                   <i class="fas fa-pencil-alt"></i>
                               </button>
                               <button type="button" class="btn btn-icon btn-round btn-danger" data-toggle="modal" data-target="#eliminar<?=$num?>">
                                   <i class="fas fa-trash-alt"></i>
                               </button>
                           </td>
                   </tr>
                   @include('ciudades.actualizar')
                   @include('ciudades.eliminar')
               @endforeach
           </tbody>
         </table>
   </div>
</div>
@endsection