@extends('layaouts.master')
@section('titulo','CRUD MASCOTAS')
@section('contenido')
 <!-- INICIO DE VUE -->
 	<div id="apiMascota">

	<h1>HOLA MUNDO</h1>
	<!-- <h1>@{{mensaje}}</h1> -->

	<!-- <pre>@{{mascotas}}</pre> -->

	<div class="row">
		<div class="col-md-12">
			<div class="card card-warning">
				<div class="card-header">
					<h4>CRUD MASCOTAS <button class="btn btn-primary btn-sm" @click="mostrarModal()"><i class="fas fa-plus fa-lg"></i></button></h4>
				</div>
				<div class="card-body">
		<!-- INICIO DE LA TABLA -->
			<table class="table table-bordered table-striped">
				<thead>
					<th>NOMBRE</th>
					<th>GENERO</th>
					<th>PESO</th>
					<th>ACCIONES</th>
				</thead>

				<tbody>
					<tr v-for="mascota in mascotas">
						<td>@{{mascota.nombre}}</td>
						<td>@{{mascota.genero}}</td>
						<td>@{{mascota.peso}}</td>
						<td>
							<button class="btn btn-sm" @click="mostrarModal()"> <i class="fas fa-edit fa-lg"></i> </button>

							<button class="btn btn-sm"> <i class="fas fa-trash-alt fa-lg"></i></button>
						</td>
					</tr>
				</tbody>
			</table>
		<!-- FIN DE LA TABLA -->
				</div>
			</div>
			<!-- FIN DEL CARD -->
			
		</div>
		<!-- FIN DEL DIV COL-MD-12 -->
		
	   </div>
	   <!-- FIN DEL DIV.ROW -->
	   	<!-- Modal para el formulario del registro de los moovimientos -->
<div class="modal fade" id="modalMascota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" >Registro de Mascotas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<input type="text" class="form-control" placeholder="Nombre de la mascota" v-model="nombre"><br>
      	<input type="number" class="form-control" placeholder="Escriba el peso" v-model="peso"><br>

      	<select class="form-control" v-model="genero">
      		<option disabled="">Elige un genero</option>
      		<option value="M">M</option>
      		<option value="H">H</option>
      	</select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" @click="guardarMascota()">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- aqui termina el modal-->
	</div>
	<!-- FIN DE VUE -->
@endsection
@push('scripts')
	<script type="text/javascript" src="{{asset('js/apis/mascota.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/vue-resource.js')}}"></script>
@endpush