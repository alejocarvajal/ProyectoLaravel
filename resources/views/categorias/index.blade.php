@extends('layouts.admin')

@section('contenido')
    {{session('mensaje')}}
    <table class="table table-hoover">
        <tr>
            <th>Nombre</th>
            <th>Opciones</th>
        </tr>
        @foreach($cats as $categorias)
            <tr>
                <td>{{$categorias->name}}</td>
                <td>
                    {!! link_to_route('categorias.edit',$title='Editar',$parameters=$categorias->id) !!}
                    {!! Form::open(['route'=>['categorias.destroy',$categorias->id],'method'=>'DELETE']) !!}
                     {!! Form::submit('Eliminar')!!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection