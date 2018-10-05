@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Editar Mesa: {{$mesa->numeromesa}}</h3>
		@if (count($errors)>0)
		<div class="alert alert-danger"> 
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif

		{!!Form::model($mesa,['method'=>'PATCH','route'=>['restaurante.mesas.update', $mesa->id]])!!}
		{!!Form::token()!!}
			<div class="form-group">
				<label for="numeromesa">Numero de mesa</label>
				<input type="text" name="numeromesa" class="form-control" value="{{$mesa->numeromesa}}" placeholder="Número...">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		{!!Form::close()!!}
	</div>
</div>

@endsection