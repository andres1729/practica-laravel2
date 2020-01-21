@extends("../layouts.plantilla")

@section("cabecera")
EDITAR REGISTROS
@endsection

@section("contenido")

<!--  <form method="post" action="/productos/{{$producto->id}}"> -->
  {!! Form::model($producto, ['method' => 'POST', 'action'=>['productosController@update', $producto->id]]) !!}

      <table>
        <tr>
          <td>Nombre: </td>

        <td>
          <input type="text", name="NombreArticulo" value="{{$producto->NombreArticulo}}">
          @csrf

      <!--    <input type="hidden" name="_method" value="PUT"> -->

        </td>
      </tr>
      <tr>
        <td>Seccion</td>
        <td>
          <input type="text", name="seccion" value="{{$producto->seccion}}">
        </td>
      </tr>

      <tr>
        <td>Precio</td>
        <td>
          <input type="text", name="Precio" value="{{$producto->Precio}}">
        </td>
      </tr>

      <tr>
        <td>Fecha</td>
        <td>
          <input type="text", name="Fecha" value="{{$producto->Fecha}}">
        </td>
      </tr>

      <tr>
        <td>País de Origen</td>
        <td>
          <input type="text", name="PaisOrigen" value="{{$producto->PaisOrigen}}">
        </td>
      </tr>

      <tr>
        <td>
          <input type="submit", name="enviar", value="Actualizar">
        </td>
      <tr>
        <td >
          <input type="reset", name="borrar", value="Borrar campos">
        </td>
      </tr>
      </tr>

    </table>

<!-- </form> -->
   {!! Form::close() !!}

  <!--  <form method="post" action="/productos/{{$producto->id}}"> -->
  {!! Form::open( ['method' => 'DELETE', 'action'=>['productosController@destroy', $producto->id]]) !!}
      @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Eliminar registro">

  <!-- </form> -->
  {!! Form::close() !!}

@endsection

@section("pie")

@endsection
