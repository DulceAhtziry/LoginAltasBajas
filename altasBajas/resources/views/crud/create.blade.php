@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center"><td class="icocod">&#128200;</td>Agregar ingresos</p>
    
    <form class="row g-3 fs-4" action="/crud/store" method="post">
        @csrf
        @method('POST')
        <div class="col-md-6">
            <label for="tipo" class="form-label"><td class="icocod">&#128220;</td>Tipo de ingresos</label>
            <select name="tipo" id="tipo" class="form-select">
                @foreach (['Gasto', 'Pago'] as $tipo )
                    <option value="{{ $tipo }}">{{ $tipo }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="categoria" class="form-label"><td class="icocod">&#128220;</td>Tipo de categoria</label>
            <select name="categoria" id="categoria" class="form-select">
                @foreach (['Comida','Pasajes','Ropa','Salidas','Mercado libre','Plataformas de entretenimiento','Juegos',
                        'Trabajo', 'Cuidando niños','Venta de ropa','Venta de dulces','Trabajos extras','Becas','Dinero que me prociona mi papá'] as $categoria )
                    <option value="{{ $categoria }}">{{ $categoria }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <label for="descripcion" class="form-label"><td class="icocod">&#128221;</td>Descripción</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
        </div>
        <div class="col-6 text-center">
            <label for="cantidad"><td class="icocod">&#128179;</td>Escribe la Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" >
        </div>
        <div class="col-6 text-center">
            <label for="fecha"><td class="icocod">&#128198;</td>Escribe la fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" >
        </div>
        
        <div class="col-12">
            <button class="btn btn-primary mt-3">
                Guardar
            </button>
        </div>
        
    </form>
    
@endsection
