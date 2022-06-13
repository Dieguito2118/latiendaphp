@extends('layouts.principal')

@section('contenido')
    <form class="col s8" 
    method="POST" 
    action="{{route('productos.store') }}"
    enctype="multipart/form-data">
      @csrf  

      @if( session('mensajito') )
      <div class="row">
        <strong>{{ session('mensajito') }}</strong>
      </div>
      @endif

    <div class="row">
        <div class="col s8">
        <h1 class="blue-text text-darken-2">Nuevo Producto</h1></h1>
        </div>
        </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nombre del Producto" id="Nombre" type="text" class="validate" name="nombre" >
          <label for="nombre">Nombre del Producto</label>
          <strong>{{ $errors->first('nombre') }}</strong>
        </div>
        <div class="input-field col s6">
          <input id="desc" type="text" class="validate" name="desc">
          <label for="last_name">Descripcion</label>
          <strong>{{ $errors->first('desc') }}</strong>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  value="Precio" id="precio" type="text" class="validate" name="precio">
          <label for="disabled">Precio</label>
          <strong>{{ $errors->first('precio') }}</strong>
        </div>
      </div>
      <div class="row">
      <div class="col s8 input-field">
        <select name="marca" id="marca">
          <option value="">Elija su Marca</option>
          @foreach($marcas as $marca)
          <option value="{{$marca->id}}">{{ $marca->Nombre}}</option>
          @endforeach
        </select>
        <label>Elija Marca</label>
        <strong>{{ $errors->first('marca') }}</strong>
      </div>
      </div>

      <div class="row">
      <div class="col s8 input-field">
      <select name="categoria" id="categoria">
      <option value="">Elija la categoria</option>
        @foreach($categorias as $categoria)
        <option value="{{ $categoria->id }}">
          {{ $categoria->Nombre}}
        </option>
        @endforeach
      </select>
      <label>Elija la categoria</label>
      <strong>{{ $errors->first('categoria') }}</strong>
      </div>

      <div class="row">
      <div class="file-field input-field">
      <div class="btn">
        <span>imagen --- </span>
        <input type="file" name="imagen" multiple>
      </div>
      <strong class="#d81b60 pink darken-1 ">{{ $errors->first('imagen') }}</strong>
      <div class="file-path-wrapper">
        <input class="file-path validate" 
        type="text"
        placeholder="Upload one or more files">
      </div>
      </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
      <div class="file-path-wrapper">
        <input class="file-path validate"
                type="text"
                placeholder="Upload one or more files">
      </div>
    </form>
@endsection