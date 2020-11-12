CLIENTES REGISTRADOS<br>
@extends('layouts.app')



<br>
<a href="{{ url ('/register') }}">
<button type="submit">Registrar Diseño</button></a>
<br>
<br>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $user)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $una->id}}</td>
            <td>{{ $una->nombre}}</td>
            <td>{{ $una->precio}}</td>
            <td>
            <a class="btn btn-warning" href="{{ url ('/User/'.$user->id.'/edit') }}">Editar</a>
            <!--<button type="submit" onclick="return confirm('¿Deseas editar?');" >Editar </button></a>-->
        <form method="post" action="{{ url('/User/'.$una->id) }}" style="display:inline">
        {{csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar cliente?');" >Borrar </button>
        </form>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/menu-admin" class="btn btn-success"  style="background:black"> Regresar</a>