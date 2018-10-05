@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Mesas <a href="/restaurante/mesas/create"><button class="btn btn-success">Nuevo</button></a> </h3>
		@include('restaurante.mesas.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>Número</th>
					<th>Opciones</th>
				</thead>
				@foreach ($mesas as $mesa)
				<tr>
					<td>{{$mesa->id}}</td>
					<td>{{$mesa->numeromesa}}</td>
					<td>
						<a href="{{URL::action('MesaController@edit',$mesa->id)}}"><button class="btn btn-info">Editar</button></a>
						<a href=""><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$mesas->render()}}
	</div>
</div>

@endsection