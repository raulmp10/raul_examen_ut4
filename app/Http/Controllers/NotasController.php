<?php
namespace App\Http\Controllers;
use App\Models\Notas;
use Illuminate\Http\Request;
class NotasController extends Controller {
 public function index() {
 $notas= Notas::all();
 return view('notas.index', compact('notas'));
 }
//mostramos el formulario
 public function show() {
 return view('notas.index');
 }
//almacenamos el formulario para que cuando se introduzcan los siguientes datos se guarden
 public function store(Request $request) {
 Notas::create($request->validate([
 'nombre' => 'required|string',
  'nombre_modulo' => 'required|string',
   'calificacion' => 'required|decimal',

 ]));
 return redirect()->route('notas.index')->with('success', 'Creado');
 }

 public function edit(Notas $notas) {
 return view('notas.edit', compact('notas'));
 }

 public function update(Request $request, Notas $notas) {
 $notas->update($request->validate([
'nombre' => 'required|string',
  'nombre_modulo' => 'required|string',
   'calificacion' => 'required|decimal',

 ]));
 return redirect()->route('notas.index')->with('success',
'Actualizado');
 }

 public function destroy(Notas $notas) {
 $notas->delete();
 return redirect()->route('notas.index')->with('success', 'Eliminado');
 }
}
