@extends('layouts.principal')

@section('contenido')
    <form class="col s12">
        <div class="row">
        <div class="col s8">
        <h1 class="blue-text text-darken-2">Nuevo Producto</h1></h1>
        </div>
        </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nombre del Producto" id="Nombre" type="text" class="validate">
          <label for="nombre">Nombre del Producto</label>
        </div>
        <div class="input-field col s6">
          <input id="desc" type="text" class="validate">
          <label for="last_name">Descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="Precio" id="disabled" type="text" class="validate">
          <label for="disabled">Precio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
      <div class="file-field input-field">
      <div class="btn">
        <span>Ingresar Imagen</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
        <a class="waves-effect waves-light btn">ENVIAR</a>  
    </div>
    </form>
@endsection