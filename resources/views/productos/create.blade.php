@extends('layouts.principal')

@section('contenido')
    <form class="col s12" method="POST" 
    action="{{route('productos.store') }}">
      @csrf  
    <div class="row">
        <div class="col s8">
        <h1 class="blue-text text-darken-2">Nuevo Producto</h1></h1>
        </div>
        </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nombre del Producto" id="Nombre" type="text" class="validate" name="Nombre" >
          <label for="nombre">Nombre del Producto</label>
        </div>
        <div class="input-field col s6">
          <input id="desc" type="text" class="validate" name="Desc">
          <label for="last_name">Descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  value="Precio" id="precio" type="text" class="validate" name="Precio">
          <label for="disabled">Precio</label>
        </div>
      </div>
      <div class="row">
      <div class="col s8 input-field">
        <select name="marca" id="marca">
          <option>
            Elija su Marca
          </option>
          @foreach($marcas as $marca)
          <option value="{{$marca->id}}">{{ $marca->Nombre}}</option>
          @endforeach
        </select>
      </div>
      </div>
      <div class="row">
      <div class="col s8 input-field">
      <select name="categoria" id="categoria">
        @foreach($categorias as $categoria)
        <option value="{{$categoria->id}}">
            {{ $categoria->Nombre }}
          </option>
        @endforeach
      </select>
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
      <button class="btn waves-effect waves-light" type="submit" name="action">
    <i class="material-icons right">GUARDAR</i>
  </button>
    </form>
@endsection