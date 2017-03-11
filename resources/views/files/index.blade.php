@extends('layouts.admin')

@section('contenido')
<h1>Lista de archivos subidos</h1>
<table class="table table-hover">
	<tr>
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Tipo</th>
		<th>Ruta</th>
	</tr>
	@foreach($files as $file)
		<tr>
			<td>
				@if($file->type=='PDF' || $file->type=='pdf')
					<img src="public/img/`pdf.png">
				@else
					<img src="uploads/{{ $file->path }}" class="img-responsive" style="width: 80px">
				@endif
			</td>
			<td>
				{{ $file->name }}
			</td>
			<td>
				{{ $file->type }}
			</td>
			<td>
				{{ $file->path }}
			</td>
			<td>
				{{ link_to_action('FilesController@destroy',$title='Eliminar',$parameters=$file->id)}}
			</td>
		</tr>
	@endforeach
</table>
@endsection()