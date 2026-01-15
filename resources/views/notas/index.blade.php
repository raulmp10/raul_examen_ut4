@extends('adminlte::page')
@section('title', 'Items')
@section('content_header')
 <div class="row">
 <div class="col-sm-6">
 <h1>Notas</h1>
 </div>
 <div class="col-sm-6">
 <a href="{{ route('notas.create') }}" class="btn btn-primary
float-right">
 <i class="fas fa-plus"></i> Nuevo
 </a>
 </div>
 </div>
@stop
@section('content')
 @if ($message = Session::get('success'))
 <div class="alert alert-success alert-dismissible fade show">
 <button class="close" data-dismiss="alert">&times;</button>
 {{ $message }}
 </div>
 @endif
<h2>SixSeven </h2>
 <div class="card">
 <div class="card-body">
 <table class="table table-striped table-hover">
 <thead class="table-dark">
 <tr>
 <th>nombre del alumno</th>
<th>nombre del modulo</th>
<th>calificacion/th>
 </tr>
 </thead>
 <tbody>
 @forelse($notas as $nota)
 <tr>
 <td>{{ $nota->nombre }}</td>
 <td>{{ $nota->nombre_modulo}}</td>
 
 <td>{{ $nota->calificacion}}</td>
 <td>
 <a href="{{ route('notas.edit', $item) }}"
class="btn btn-sm btn-warning">
 <i class="fas fa-edit"></i>
 </a>
<form action="{{ route('notas.destroy', $item)
}}" method="POST" style="display:inline;">
 @csrf
@method('DELETE')
<button type="submit" class="btn btn-sm
btn-danger" onclick="return confirm('¿Seguro?')">
 <i class="fas fa-trash"></i>
 </button>
 </form>
 </td>
 </tr>
 @empty
 <tr>
 <td colspan="3" class="text-center">Sin datos</td>
 </tr>
 @endforelse
 </tbody>
 </table>
 </div>
 </div>
@stop