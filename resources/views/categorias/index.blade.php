@extends('layouts.admin')

@section('contenido')
	<table class="table table-hover">
		<tr><th>Nombre</th><th>Opciones</th></tr>
		@foreach($cats as $category)
			<tr>
				<td>{{$category->name}}</td>
				<td>
				{!!link_to_route('categorias.edit',$title='Editar',$parameters=$category->id)!!}
				 
				 {!!Form::open(['route'=>['categorias.destroy',$category->id],'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
				
			 	</td>

			</tr>
		@endforeach
	</table>
	{{$cats->links()}}
@endsection