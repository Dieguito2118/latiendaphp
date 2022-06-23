@extends ('layouts.principal')

@section('contenido')
<div class="row">
    <h1>Catalogo de Productos</h1>
</div>
@foreach($productos as $producto)
<div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/'.$producto->Imagen ) }}">
          <span class="card-title">{{$producto->Nombre}}</span>
        </div>
        <div class="card-content">
          <p>{{ $producto->descripcion }}</p>
          <ul>
            <li>Precio: $ {{ $producto-> Precio }}</li>
            <li>Categoria: {{ $producto->Categoria->Nombre }}</li>
            <li>Marca: {{ $producto->Marca->Nombre }}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection