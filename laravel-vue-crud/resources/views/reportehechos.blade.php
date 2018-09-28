@extends('app')
@section('content')

<h4 class="text-center">Registrar reporte de hechos</h4>
<div id="crud" class="row">
   <div class= "col-sm-3">
       <table class="table table-hover" >
         <thead>
          <tr>
           <th>Registro</th>
          </tr>
         </thead>
         <tbody>
          <tr>
          <td><a href="#" v-on:click.prevent="mostrarVictima()">Datos de la Victima</a></td>
          </tr>
          <tr>
           <td><a href="#" v-on:click.prevent="mostrarHechos()">Hechos Relacionados</a></td>
          </tr>
          <tr>
           <td>Datos del Imputado</td>
          </tr>
          <tr>
           <td>Partido Politico</td>
          </tr>
          <tr>
           <td>Descripcion de los hechos</td>
          </tr>
          <tr>
           <td>Evidencias</td>
          </tr>
         </tbody>
       </table>
   </div>
   <div class="col-sm-9">
        <div class="row">
            <div class="col-sm-8">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Modalidad</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Seleccione la modalidad</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
               <label for="">Encargado: Ramiro</label>
            </div>
        </div>
        <div id="formularios">
           @include('victima')
        </div>
        @include('hechos')
   </div>
</div>
@endsection
